<?php

/**
 * Companies filter form base class.
 *
 * @package    employee
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseCompaniesFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'employee_name'    => new sfWidgetFormFilterInput(),
      'employee_surname' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'employee_name'    => new sfValidatorPass(array('required' => false)),
      'employee_surname' => new sfValidatorPass(array('required' => false)),
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
      'employee_id'      => 'Number',
      'employee_name'    => 'Text',
      'employee_surname' => 'Text',
    );
  }
}
