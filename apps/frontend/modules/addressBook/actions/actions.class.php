<?php

/**
 * addressBook actions.
 *
 * @package    showmobile
 * @subpackage addressBook
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class addressBookActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->showmobile_address_books = Doctrine::getTable('ShowmobileAddressBook')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->showmobile_address_book = Doctrine::getTable('ShowmobileAddressBook')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->showmobile_address_book);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ShowmobileAddressBookForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ShowmobileAddressBookForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($showmobile_address_book = Doctrine::getTable('ShowmobileAddressBook')->find(array($request->getParameter('id'))), sprintf('Object showmobile_address_book does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobileAddressBookForm($showmobile_address_book);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($showmobile_address_book = Doctrine::getTable('ShowmobileAddressBook')->find(array($request->getParameter('id'))), sprintf('Object showmobile_address_book does not exist (%s).', $request->getParameter('id')));
    $this->form = new ShowmobileAddressBookForm($showmobile_address_book);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($showmobile_address_book = Doctrine::getTable('ShowmobileAddressBook')->find(array($request->getParameter('id'))), sprintf('Object showmobile_address_book does not exist (%s).', $request->getParameter('id')));
    $showmobile_address_book->delete();

    $this->redirect('addressBook/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $showmobile_address_book = $form->save();

      $this->redirect('addressBook/edit?id='.$showmobile_address_book->getId());
    }
  }
}
