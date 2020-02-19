<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseGradeSlot extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_grade_slot');
        $this->hasColumn('slt_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => '10',
             ));
        $this->hasColumn('grade_code', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '4',
             ));
        $this->hasColumn('slt_scale_year', 'integer', 10, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '10',
             ));
        $this->hasColumn('slt_amount', 'float', 20, array(
             'type' => 'float',
             'length' => '20',
             'scale' => '2',
             ));
        $this->hasColumn('emp_basic_salary', 'float', 20, array(
             'type' => 'float',
             'length' => '20',
             'scale' => '2',
             ));
    }

    public function setUp()
    {
        $this->hasOne('Grade', array(
             'local' => 'grade_code',
             'foreign' => 'grade_code'));

        $this->hasOne('Employee', array(
             'local' => 'slt_id',
             'foreign' => 'slt_scale_year'));

        $this->hasMany('EmployeeMaster', array(
             'local' => 'slt_id',
             'foreign' => 'slt_scale_year'));

        $this->hasMany('Promotion', array(
             'local' => 'slt_id',
             'foreign' => 'slt_id'));

        $this->hasMany('PayrollIncrement', array(
             'local' => 'slt_id',
             'foreign' => 'inc_new_slt_scale_year'));

        $this->hasMany('Reinstatement', array(
             'local' => 'slt_id',
             'foreign' => 'slt_id'));

        $this->hasMany('PayrollIncrementCancel', array(
             'local' => 'slt_id',
             'foreign' => 'inc_new_slt_scale_year'));
    }
}