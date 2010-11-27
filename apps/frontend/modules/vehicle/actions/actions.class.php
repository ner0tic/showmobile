<?php

/**
 * vehicle actions.
 *
 * @package    showmobile
 * @subpackage vehicle
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class vehicleActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->showmobile_vehicles = Doctrine::getTable('ShowmobileVehicle')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->showmobile_vehicle = Doctrine::getTable('ShowmobileVehicle')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->showmobile_vehicle);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ShowmobileVehicleForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ShowmobileVehicleForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($showmobile_vehicle = Doctrine::getTable('ShowmobileVehicle')->find(array($request->getParameter('id'))), sprintf('Object showmobile_vehicle does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobileVehicleForm($showmobile_vehicle);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($showmobile_vehicle = Doctrine::getTable('ShowmobileVehicle')->find(array($request->getParameter('id'))), sprintf('Object showmobile_vehicle does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobileVehicleForm($showmobile_vehicle);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($showmobile_vehicle = Doctrine::getTable('ShowmobileVehicle')->find(array($request->getParameter('id'))), sprintf('Object showmobile_vehicle does not exist (%s).', $request->getParameter('id')));
    $showmobile_vehicle->delete();

    $this->redirect('vehicle/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $showmobile_vehicle = $form->save();

      $this->redirect('vehicle/edit?id='.$showmobile_vehicle->getId());
    }
  }
}
