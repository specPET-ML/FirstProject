<?php

/**
 * Invoices form base class.
 *
 * @method Invoices getObject() Returns the current form's model object
 *
 * @package    MokYokIT
 * @subpackage form
 * @author     Marcin Ławniczak
 */
abstract class BaseInvoicesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'invoice_id'   => new sfWidgetFormInputHidden(),
      'company_id'   => new sfWidgetFormPropelChoice(array('model' => 'Companies', 'add_empty' => false)),
      'issued_date'  => new sfWidgetFormDate(),
      'service_name' => new sfWidgetFormInputText(),
      'sold_date'    => new sfWidgetFormDate(),
      'customer_id'  => new sfWidgetFormPropelChoice(array('model' => 'Customers', 'add_empty' => false)),
      'price_netto'  => new sfWidgetFormInputText(),
      'price_brutto' => new sfWidgetFormInputText(),
      'value_tax'    => new sfWidgetFormInputText(),
      'tax'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'invoice_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->getInvoiceId()), 'empty_value' => $this->getObject()->getInvoiceId(), 'required' => false)),
      'company_id'   => new sfValidatorPropelChoice(array('model' => 'Companies', 'column' => 'company_id')),
      'issued_date'  => new sfValidatorDate(array('required' => false)),
      'service_name' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'sold_date'    => new sfValidatorDate(array('required' => false)),
      'customer_id'  => new sfValidatorPropelChoice(array('model' => 'Customers', 'column' => 'customer_id')),
      'price_netto'  => new sfValidatorNumber(array('required' => false)),
      'price_brutto' => new sfValidatorNumber(array('required' => false)),
      'value_tax'    => new sfValidatorNumber(array('required' => false)),
      'tax'          => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('invoices[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Invoices';
  }


}
