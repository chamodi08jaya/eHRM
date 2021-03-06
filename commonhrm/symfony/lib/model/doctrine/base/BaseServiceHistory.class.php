<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseServiceHistory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_emp_service_history');
        $this->hasColumn('esh_code', 'integer', 11, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '11',
             ));
        $this->hasColumn('emp_number', 'integer', 7, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '7',
             ));
        $this->hasColumn('esh_name', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('esh_name_si', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('esh_name_ta', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('esh_designation', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('esh_designation_si', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('esh_designation_ta', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('esh_district', 'string', 50, array(
             'type' => 'string',
             'length' => '50',
             ));
        $this->hasColumn('esh_from_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('esh_to_date', 'date', null, array(
             'type' => 'date',
             ));
    }

    public function setUp()
    {
        $this->hasOne('Employee', array(
             'local' => 'emp_number',
             'foreign' => 'emp_number'));

        $this->hasOne('District', array(
             'local' => 'esh_district',
             'foreign' => 'district_id'));
    }
}