<?php

/**
 * band actions.
 *
 * @package    showmobile
 * @subpackage band
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class bandActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->showmobile_bands = Doctrine::getTable('ShowmobileBand')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->showmobile_band = Doctrine::getTable('ShowmobileBand')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->showmobile_band);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ShowmobileBandForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ShowmobileBandForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($showmobile_band = Doctrine::getTable('ShowmobileBand')->find(array($request->getParameter('id'))), sprintf('Object showmobile_band does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobileBandForm($showmobile_band);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($showmobile_band = Doctrine::getTable('ShowmobileBand')->find(array($request->getParameter('id'))), sprintf('Object showmobile_band does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobileBandForm($showmobile_band);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($showmobile_band = Doctrine::getTable('ShowmobileBand')->find(array($request->getParameter('id'))), sprintf('Object showmobile_band does not exist (%s).', $request->getParameter('id')));
    $showmobile_band->delete();

    $this->redirect('band/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $showmobile_band = $form->save();

      $this->redirect('band/edit?id='.$showmobile_band->getId());
    }
  }
}
