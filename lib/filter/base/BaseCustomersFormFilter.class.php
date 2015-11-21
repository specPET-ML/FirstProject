<?php

/**
 * Customers filter form base class.
 *
 * @package    MokYokIT
 * @subpackage filter
 * @author     Marcin Ławniczak
 */
abstract class BaseCustomersFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'customer_name'     => new sfWidgetFormFilterInput(),
      'customer_adress'   => new sfWidgetFormFilterInput(),
      'customer_zip_code' => new sfWidgetFormFilterInput(),
      'customer_city'     => new sfWidgetFormFilterInput(),
      'customer_NIP'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'customer_name'     => new sfValidatorPass(array('required' => false)),
      'customer_adress'   => new sfValidatorPass(array('required' => false)),
      'customer_zip_code' => new sfValidatorPass(array('required' => false)),
      'customer_city'     => new sfValidatorPass(array('required' => false)),
      'customer_NIP'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('customers_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Customers';
  }

  public function getFields()
  {
    return array(
      'customer_id'       => 'Number',
      'customer_name'     => 'Text',
      'customer_adress'   => 'Text',
      'customer_zip_code' => 'Text',
      'customer_city'     => 'Text',
      'customer_NIP'      => 'Text',
    );
  }
}
