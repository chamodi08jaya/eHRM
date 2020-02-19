<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseJobTitleEmployeeStatus extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_jobtit_empstat');
        $this->hasColumn('jobtit_code', 'string', 13, array(
             'type' => 'string',
             'primary' => true,
             'length' => '13',
             ));
        $this->hasColumn('estat_code', 'string', 13, array(
             'type' => 'string',
             'primary' => true,
             'length' => '13',
             ));
    }

    public function setUp()
    {
        $this->hasOne('JobTitle', array(
             'local' => 'jobtit_code',
             'foreign' => 'id'));

        $this->hasOne('EmployeeStatus', array(
             'local' => 'estat_code',
             'foreign' => 'id'));
    }
}