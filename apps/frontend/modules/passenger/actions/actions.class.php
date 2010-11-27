<?php

/**
 * passenger actions.
 *
 * @package    showmobile
 * @subpackage passenger
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class passengerActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->showmobile_passengers = Doctrine::getTable('ShowmobilePassenger')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->showmobile_passenger = Doctrine::getTable('ShowmobilePassenger')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->showmobile_passenger);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ShowmobilePassengerForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ShowmobilePassengerForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($showmobile_passenger = Doctrine::getTable('ShowmobilePassenger')->find(array($request->getParameter('id'))), sprintf('Object showmobile_passenger does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobilePassengerForm($showmobile_passenger);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($showmobile_passenger = Doctrine::getTable('ShowmobilePassenger')->find(array($request->getParameter('id'))), sprintf('Object showmobile_passenger does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobilePassengerForm($showmobile_passenger);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($showmobile_passenger = Doctrine::getTable('ShowmobilePassenger')->find(array($request->getParameter('id'))), sprintf('Object showmobile_passenger does not exist (%s).', $request->getParameter('id')));
    $showmobile_passenger->delete();

    $this->redirect('passenger/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $showmobile_passenger = $form->save();

      $this->redirect('passenger/edit?id='.$showmobile_passenger->getId());
    }
  }
}
