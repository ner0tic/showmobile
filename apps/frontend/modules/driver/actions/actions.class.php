<?php

/**
 * driver actions.
 *
 * @package    showmobile
 * @subpackage driver
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class driverActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->showmobile_drivers = Doctrine::getTable('ShowmobileDriver')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->showmobile_driver = Doctrine::getTable('ShowmobileDriver')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->showmobile_driver);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ShowmobileDriverForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ShowmobileDriverForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($showmobile_driver = Doctrine::getTable('ShowmobileDriver')->find(array($request->getParameter('id'))), sprintf('Object showmobile_driver does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobileDriverForm($showmobile_driver);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($showmobile_driver = Doctrine::getTable('ShowmobileDriver')->find(array($request->getParameter('id'))), sprintf('Object showmobile_driver does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobileDriverForm($showmobile_driver);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($showmobile_driver = Doctrine::getTable('ShowmobileDriver')->find(array($request->getParameter('id'))), sprintf('Object showmobile_driver does not exist (%s).', $request->getParameter('id')));
    $showmobile_driver->delete();

    $this->redirect('driver/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $showmobile_driver = $form->save();

      $this->redirect('driver/edit?id='.$showmobile_driver->getId());
    }
  }
}
