<?php

/**
 * company actions.
 *
 * @package    MokYokIT
 * @subpackage company
 * @author     Marcin Ławniczak
 */
class companyActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->companiess = CompaniesPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->companies = CompaniesPeer::retrieveByPk($request->getParameter('company_id'));
    $this->forward404Unless($this->companies);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new companiesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new companiesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($companies = CompaniesPeer::retrieveByPk($request->getParameter('company_id')), sprintf('Object companies does not exist (%s).', $request->getParameter('company_id')));
    $this->form = new companiesForm($companies);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($companies = CompaniesPeer::retrieveByPk($request->getParameter('company_id')), sprintf('Object companies does not exist (%s).', $request->getParameter('company_id')));
    $this->form = new companiesForm($companies);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($companies = CompaniesPeer::retrieveByPk($request->getParameter('company_id')), sprintf('Object companies does not exist (%s).', $request->getParameter('company_id')));
    $companies->delete();

    $this->redirect('company/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $companies = $form->save();

      $this->redirect('company/edit?company_id='.$companies->getCompanyId());
    }
  }
}
