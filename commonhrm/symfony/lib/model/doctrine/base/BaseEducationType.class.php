<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseEducationType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_education_type');
        $this->hasColumn('edu_type_id', 'integer', 11, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '11',
             ));
        $this->hasColumn('edu_type_name', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('edu_type_name_si', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('edu_type_name_ta', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
    }

    public function setUp()
    {
        $this->hasMany('EducationSubject', array(
             'local' => 'edu_type_id',
             'foreign' => 'edu_type_id'));

        $this->hasMany('EducationYearGrade', array(
             'local' => 'edu_type_id',
             'foreign' => 'edu_type_id'));

        $this->hasMany('EducationEMPHead', array(
             'local' => 'edu_type_id',
             'foreign' => 'edu_type_id'));
    }
}