<?php

/**
 * customer actions.
 *
 * @package    MokYokIT
 * @subpackage customer
 * @author     Marcin Ławniczak
 */
class customerActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->customerss = CustomersPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->customers = CustomersPeer::retrieveByPk($request->getParameter('customer_id'));
    $this->forward404Unless($this->customers);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new customersForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new customersForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($customers = CustomersPeer::retrieveByPk($request->getParameter('customer_id')), sprintf('Object customers does not exist (%s).', $request->getParameter('customer_id')));
    $this->form = new customersForm($customers);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($customers = CustomersPeer::retrieveByPk($request->getParameter('customer_id')), sprintf('Object customers does not exist (%s).', $request->getParameter('customer_id')));
    $this->form = new customersForm($customers);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($customers = CustomersPeer::retrieveByPk($request->getParameter('customer_id')), sprintf('Object customers does not exist (%s).', $request->getParameter('customer_id')));
    $customers->delete();

    $this->redirect('customer/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $customers = $form->save();

      $this->redirect('customer/edit?customer_id='.$customers->getCustomerId());
    }
  }
}
