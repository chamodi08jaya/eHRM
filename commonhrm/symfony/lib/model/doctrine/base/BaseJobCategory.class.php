<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseJobCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_eec');
        $this->hasColumn('eec_code', 'string', 13, array(
             'type' => 'string',
             'primary' => true,
             'length' => '13',
             ));
        $this->hasColumn('eec_desc', 'string', 50, array(
             'type' => 'string',
             'length' => '50',
             ));
    }

    public function setUp()
    {
        $this->hasMany('Employee', array(
             'local' => 'eec_code',
             'foreign' => 'eeo_cat_code'));
    }
}