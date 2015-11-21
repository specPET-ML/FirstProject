<?php

/**
 * Invoices filter form base class.
 *
 * @package    MokYokIT
 * @subpackage filter
 * @author     Marcin Ławniczak
 */
abstract class BaseInvoicesFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'company_id'   => new sfWidgetFormPropelChoice(array('model' => 'Companies', 'add_empty' => true)),
      'issued_date'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'service_name' => new sfWidgetFormFilterInput(),
      'sold_date'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'customer_id'  => new sfWidgetFormPropelChoice(array('model' => 'Customers', 'add_empty' => true)),
      'price_netto'  => new sfWidgetFormFilterInput(),
      'price_brutto' => new sfWidgetFormFilterInput(),
      'value_tax'    => new sfWidgetFormFilterInput(),
      'tax'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'company_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Companies', 'column' => 'company_id')),
      'issued_date'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'service_name' => new sfValidatorPass(array('required' => false)),
      'sold_date'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'customer_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Customers', 'column' => 'customer_id')),
      'price_netto'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'price_brutto' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'value_tax'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tax'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('invoices_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Invoices';
  }

  public function getFields()
  {
    return array(
      'invoice_id'   => 'Number',
      'company_id'   => 'ForeignKey',
      'issued_date'  => 'Date',
      'service_name' => 'Text',
      'sold_date'    => 'Date',
      'customer_id'  => 'ForeignKey',
      'price_netto'  => 'Number',
      'price_brutto' => 'Number',
      'value_tax'    => 'Number',
      'tax'          => 'Number',
    );
  }
}
