<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BasePerformanceDuty extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_perf_duty');
        $this->hasColumn('dut_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('dut_code', 'string', 10, array(
             'type' => 'string',
             'length' => '10',
             ));
        $this->hasColumn('dut_name', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('dut_name_si', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('dut_name_ta', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('dut_desc', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('dut_desc_si', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('dut_desc_ta', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('dtg_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('rate_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
    }

    public function setUp()
    {
        $this->hasOne('PerformanceDutyGroup', array(
             'local' => 'dtg_id',
             'foreign' => 'dtg_id'));

        $this->hasOne('PerformanceRate', array(
             'local' => 'rate_id',
             'foreign' => 'rate_id'));

        $this->hasMany('PerformanceEvaluationDuty', array(
             'local' => 'dut_id',
             'foreign' => 'dut_id'));

        $this->hasMany('PerformanceEvaluationEmployeeDuty', array(
             'local' => 'dut_id',
             'foreign' => 'dut_id'));
    }
}