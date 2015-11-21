<?php

/**
 * Customers form base class.
 *
 * @method Customers getObject() Returns the current form's model object
 *
 * @package    MokYokIT
 * @subpackage form
 * @author     Marcin Ławniczak
 */
abstract class BaseCustomersForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'customer_id'       => new sfWidgetFormInputHidden(),
      'customer_name'     => new sfWidgetFormInputText(),
      'customer_adress'   => new sfWidgetFormInputText(),
      'customer_zip_code' => new sfWidgetFormInputText(),
      'customer_city'     => new sfWidgetFormInputText(),
      'customer_NIP'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'customer_id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->getCustomerId()), 'empty_value' => $this->getObject()->getCustomerId(), 'required' => false)),
      'customer_name'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'customer_adress'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'customer_zip_code' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'customer_city'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'customer_NIP'      => new sfValidatorString(array('max_length' => 15, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Customers', 'column' => array('customer_name')))
    );

    $this->widgetSchema->setNameFormat('customers[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Customers';
  }


}
