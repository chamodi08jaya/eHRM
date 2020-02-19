<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseAttendanceDay extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_atn_day');
        $this->hasColumn('adt_day', 'string', 10, array(
             'type' => 'string',
             'primary' => true,
             'length' => '10',
             ));
        $this->hasColumn('dt_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('adt_intime', 'time', 25, array(
             'type' => 'time',
             'length' => '25',
             ));
        $this->hasColumn('adt_outtime', 'time', 25, array(
             'type' => 'time',
             'length' => '25',
             ));
    }

    public function setUp()
    {
        $this->hasOne('AttendanceDateType', array(
             'local' => 'dt_id',
             'foreign' => 'dt_id'));
    }
}