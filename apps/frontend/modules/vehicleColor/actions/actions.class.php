<?php

/**
 * vehicleColor actions.
 *
 * @package    showmobile
 * @subpackage vehicleColor
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class vehicleColorActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->showmobile_vehicle_colors = Doctrine::getTable('ShowmobileVehicleColor')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->showmobile_vehicle_color = Doctrine::getTable('ShowmobileVehicleColor')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->showmobile_vehicle_color);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ShowmobileVehicleColorForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ShowmobileVehicleColorForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($showmobile_vehicle_color = Doctrine::getTable('ShowmobileVehicleColor')->find(array($request->getParameter('id'))), sprintf('Object showmobile_vehicle_color does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobileVehicleColorForm($showmobile_vehicle_color);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($showmobile_vehicle_color = Doctrine::getTable('ShowmobileVehicleColor')->find(array($request->getParameter('id'))), sprintf('Object showmobile_vehicle_color does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobileVehicleColorForm($showmobile_vehicle_color);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($showmobile_vehicle_color = Doctrine::getTable('ShowmobileVehicleColor')->find(array($request->getParameter('id'))), sprintf('Object showmobile_vehicle_color does not exist (%s).', $request->getParameter('id')));
    $showmobile_vehicle_color->delete();

    $this->redirect('vehicleColor/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $showmobile_vehicle_color = $form->save();

      $this->redirect('vehicleColor/edit?id='.$showmobile_vehicle_color->getId());
    }
  }
}
