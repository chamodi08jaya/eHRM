<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BasePerformanceDutyGroup extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_perf_duty_group');
        $this->hasColumn('dtg_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('dtg_code', 'string', 10, array(
             'type' => 'string',
             'length' => '10',
             ));
        $this->hasColumn('dtg_name', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('dtg_name_si', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('dtg_name_ta', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('dtg_desc', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('dtg_desc_si', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('dtg_desc_ta', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
    }

    public function setUp()
    {
        $this->hasMany('PerformanceDuty', array(
             'local' => 'dtg_id',
             'foreign' => 'dtg_id'));
    }
}