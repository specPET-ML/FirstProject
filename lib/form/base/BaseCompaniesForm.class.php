<?php

/**
 * Companies form base class.
 *
 * @method Companies getObject() Returns the current form's model object
 *
 * @package    employee
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCompaniesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'employee_id'      => new sfWidgetFormInputHidden(),
      'employee_name'    => new sfWidgetFormInputText(),
      'employee_surname' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'employee_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->getEmployeeId()), 'empty_value' => $this->getObject()->getEmployeeId(), 'required' => false)),
      'employee_name'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'employee_surname' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('companies[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Companies';
  }


}
