<?php

/**
 * country actions.
 *
 * @package    showmobile
 * @subpackage country
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class countryActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->showmobile_countrys = Doctrine::getTable('ShowmobileCountry')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->country = Doctrine::getTable('ShowmobileCountry')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->country);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ShowmobileCountryForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ShowmobileCountryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($showmobile_country = Doctrine::getTable('ShowmobileCountry')->find(array($request->getParameter('id'))), sprintf('Object showmobile_country does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobileCountryForm($showmobile_country);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($showmobile_country = Doctrine::getTable('ShowmobileCountry')->find(array($request->getParameter('id'))), sprintf('Object showmobile_country does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobileCountryForm($showmobile_country);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($showmobile_country = Doctrine::getTable('ShowmobileCountry')->find(array($request->getParameter('id'))), sprintf('Object showmobile_country does not exist (%s).', $request->getParameter('id')));
    $showmobile_country->delete();

    $this->redirect('country/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $showmobile_country = $form->save();

      $this->redirect('country/edit?id='.$showmobile_country->getId());
    }
  }
}
