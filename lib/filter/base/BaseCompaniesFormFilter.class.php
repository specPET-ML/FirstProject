<?php

/**
 * Companies filter form base class.
 *
 * @package    MokYokIT
 * @subpackage filter
 * @author     Marcin Ławniczak
 */
abstract class BaseCompaniesFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'company_name'         => new sfWidgetFormFilterInput(),
      'company_adress'       => new sfWidgetFormFilterInput(),
      'company_zip_code'     => new sfWidgetFormFilterInput(),
      'company_city'         => new sfWidgetFormFilterInput(),
      'company_NIP'          => new sfWidgetFormFilterInput(),
      'company_bank_name'    => new sfWidgetFormFilterInput(),
      'company_bank_account' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'company_name'         => new sfValidatorPass(array('required' => false)),
      'company_adress'       => new sfValidatorPass(array('required' => false)),
      'company_zip_code'     => new sfValidatorPass(array('required' => false)),
      'company_city'         => new sfValidatorPass(array('required' => false)),
      'company_NIP'          => new sfValidatorPass(array('required' => false)),
      'company_bank_name'    => new sfValidatorPass(array('required' => false)),
      'company_bank_account' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('companies_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Companies';
  }

  public function getFields()
  {
    return array(
      'company_id'           => 'Number',
      'company_name'         => 'Text',
      'company_adress'       => 'Text',
      'company_zip_code'     => 'Text',
      'company_city'         => 'Text',
      'company_NIP'          => 'Text',
      'company_bank_name'    => 'Text',
      'company_bank_account' => 'Text',
    );
  }
}
