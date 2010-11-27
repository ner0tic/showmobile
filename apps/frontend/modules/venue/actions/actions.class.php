<?php

/**
 * venue actions.
 *
 * @package    showmobile
 * @subpackage venue
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class venueActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->showmobile_venues = Doctrine::getTable('showmobileVenue')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->showmobile_venue = Doctrine::getTable('showmobileVenue')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->showmobile_venue);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new showmobileVenueForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new showmobileVenueForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($showmobile_venue = Doctrine::getTable('showmobileVenue')->find(array($request->getParameter('id'))), sprintf('Object showmobile_venue does not exist (%s).', $request->getParameter('id')));
    $this->form = new showmobileVenueForm($showmobile_venue);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($showmobile_venue = Doctrine::getTable('showmobileVenue')->find(array($request->getParameter('id'))), sprintf('Object showmobile_venue does not exist (%s).', $request->getParameter('id')));
    $this->form = new showmobileVenueForm($showmobile_venue);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($showmobile_venue = Doctrine::getTable('showmobileVenue')->find(array($request->getParameter('id'))), sprintf('Object showmobile_venue does not exist (%s).', $request->getParameter('id')));
    $showmobile_venue->delete();

    $this->redirect('venue/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $showmobile_venue = $form->save();

      $this->redirect('venue/edit?id='.$showmobile_venue->getId());
    }
  }
}
