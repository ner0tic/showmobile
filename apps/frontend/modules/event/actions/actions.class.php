<?php

/**
 * event actions.
 *
 * @package    showmobile
 * @subpackage event
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class eventActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->showmobile_events = Doctrine::getTable('ShowmobileEvent')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->showmobile_event = Doctrine::getTable('ShowmobileEvent')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->showmobile_event);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ShowmobileEventForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ShowmobileEventForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($showmobile_event = Doctrine::getTable('ShowmobileEvent')->find(array($request->getParameter('id'))), sprintf('Object showmobile_event does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobileEventForm($showmobile_event);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($showmobile_event = Doctrine::getTable('ShowmobileEvent')->find(array($request->getParameter('id'))), sprintf('Object showmobile_event does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobileEventForm($showmobile_event);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($showmobile_event = Doctrine::getTable('ShowmobileEvent')->find(array($request->getParameter('id'))), sprintf('Object showmobile_event does not exist (%s).', $request->getParameter('id')));
    $showmobile_event->delete();

    $this->redirect('event/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $showmobile_event = $form->save();

      $this->redirect('event/edit?id='.$showmobile_event->getId());
    }
  }
}
