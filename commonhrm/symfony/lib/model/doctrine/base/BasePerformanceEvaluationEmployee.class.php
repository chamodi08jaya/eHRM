<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BasePerformanceEvaluationEmployee extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_perf_eval_employee');
        $this->hasColumn('emp_number', 'integer', 7, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '7',
             ));
        $this->hasColumn('eval_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '4',
             ));
        $this->hasColumn('eval_dtl_id', 'integer', 10, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '10',
             ));
        $this->hasColumn('eval_emp_project_rate', 'string', 10, array(
             'type' => 'string',
             'length' => '10',
             ));
        $this->hasColumn('eval_emp_duty_rate', 'string', 10, array(
             'type' => 'string',
             'length' => '10',
             ));
        $this->hasColumn('eval_emp_duty_comment', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('eval_emp_overall_rate', 'string', 10, array(
             'type' => 'string',
             'length' => '10',
             ));
        $this->hasColumn('eval_emp_overall_grade', 'string', 10, array(
             'type' => 'string',
             'length' => '10',
             ));
        $this->hasColumn('eval_emp_overall_comment', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('eval_emp_sujested_overall_rate', 'string', 10, array(
             'type' => 'string',
             'length' => '10',
             ));
        $this->hasColumn('eval_emp_sujested_overall_rate_comment', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('eval_emp_status', 'string', 1, array(
             'type' => 'string',
             'length' => '1',
             ));
        $this->hasColumn('sup_emp_number', 'integer', 7, array(
             'type' => 'integer',
             'length' => '7',
             ));
        $this->hasColumn('eval_type_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
    }

    public function setUp()
    {
        $this->hasOne('PerformanceEvaluation', array(
             'local' => 'eval_id',
             'foreign' => 'eval_id'));

        $this->hasOne('Employee as EmployeeSubordinate', array(
             'local' => 'emp_number',
             'foreign' => 'emp_number'));

        $this->hasOne('PerformanceEvaluationDetail', array(
             'local' => 'eval_dtl_id',
             'foreign' => 'eval_dtl_id'));

        $this->hasOne('PerformanceEvaluationType', array(
             'local' => 'eval_type_id',
             'foreign' => 'eval_type_id'));

        $this->hasOne('Employee as EmployeeSupervisor', array(
             'local' => 'sup_emp_number',
             'foreign' => 'emp_number'));
    }
}