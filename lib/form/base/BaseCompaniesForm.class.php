<?php

/**
 * Companies form base class.
 *
 * @method Companies getObject() Returns the current form's model object
 *
 * @package    MokYokIT
 * @subpackage form
 * @author     Marcin Ławniczak
 */
abstract class BaseCompaniesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'company_id'           => new sfWidgetFormInputHidden(),
      'company_name'         => new sfWidgetFormInputText(),
      'company_adress'       => new sfWidgetFormInputText(),
      'company_zip_code'     => new sfWidgetFormInputText(),
      'company_city'         => new sfWidgetFormInputText(),
      'company_NIP'          => new sfWidgetFormInputText(),
      'company_bank_name'    => new sfWidgetFormInputText(),
      'company_bank_account' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'company_id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getCompanyId()), 'empty_value' => $this->getObject()->getCompanyId(), 'required' => false)),
      'company_name'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'company_adress'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'company_zip_code'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'company_city'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'company_NIP'          => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'company_bank_name'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'company_bank_account' => new sfValidatorString(array('max_length' => 26, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Companies', 'column' => array('company_name')))
    );

    $this->widgetSchema->setNameFormat('companies[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Companies';
  }


}
