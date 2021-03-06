<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseEBExam extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_ebexam');
        $this->hasColumn('ebexam_id', 'integer', 20, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '20',
             ));
        $this->hasColumn('service_code', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('grade_code', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('ebexam_name', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('ebexam_name_si', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('ebexam_name_ta', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('ebexam_description', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
    }

    public function setUp()
    {
        $this->hasOne('ServiceDetails', array(
             'local' => 'service_code',
             'foreign' => 'service_code'));

        $this->hasOne('Grade', array(
             'local' => 'grade_code',
             'foreign' => 'grade_code'));

        $this->hasOne('EMPEBExam', array(
             'local' => 'ebexam_id',
             'foreign' => 'ebexam_id'));
    }
}