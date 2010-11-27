<?php

/**
 * zone actions.
 *
 * @package    showmobile
 * @subpackage zone
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class zoneActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->showmobile_zones = Doctrine::getTable('ShowmobileZone')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->zone = Doctrine::getTable('ShowmobileZone')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->zone);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ShowmobileZoneForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ShowmobileZoneForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($showmobile_zone = Doctrine::getTable('ShowmobileZone')->find(array($request->getParameter('id'))), sprintf('Object showmobile_zone does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobileZoneForm($showmobile_zone);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($showmobile_zone = Doctrine::getTable('ShowmobileZone')->find(array($request->getParameter('id'))), sprintf('Object showmobile_zone does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobileZoneForm($showmobile_zone);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($showmobile_zone = Doctrine::getTable('ShowmobileZone')->find(array($request->getParameter('id'))), sprintf('Object showmobile_zone does not exist (%s).', $request->getParameter('id')));
    $showmobile_zone->delete();

    $this->redirect('zone/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $showmobile_zone = $form->save();

      $this->redirect('zone/edit?id='.$showmobile_zone->getId());
    }
  }
}
