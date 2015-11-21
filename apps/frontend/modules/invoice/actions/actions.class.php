<?php

/**
 * invoice actions.
 *
 * @package    MokYokIT
 * @subpackage invoice
 * @author     Marcin Ławniczak
 */
class invoiceActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->invoicess = InvoicesPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->invoices = InvoicesPeer::retrieveByPk($request->getParameter('invoice_id'));
    $this->forward404Unless($this->invoices);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new invoicesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new invoicesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($invoices = InvoicesPeer::retrieveByPk($request->getParameter('invoice_id')), sprintf('Object invoices does not exist (%s).', $request->getParameter('invoice_id')));
    $this->form = new invoicesForm($invoices);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($invoices = InvoicesPeer::retrieveByPk($request->getParameter('invoice_id')), sprintf('Object invoices does not exist (%s).', $request->getParameter('invoice_id')));
    $this->form = new invoicesForm($invoices);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($invoices = InvoicesPeer::retrieveByPk($request->getParameter('invoice_id')), sprintf('Object invoices does not exist (%s).', $request->getParameter('invoice_id')));
    $invoices->delete();

    $this->redirect('invoice/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $invoices = $form->save();

      $this->redirect('invoice/edit?invoice_id='.$invoices->getInvoiceId());
    }
  }
}
