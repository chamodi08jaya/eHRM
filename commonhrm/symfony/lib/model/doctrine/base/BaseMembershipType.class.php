<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseMembershipType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_membership_type');
        $this->hasColumn('membtype_code', 'string', 13, array(
             'type' => 'string',
             'primary' => true,
             'length' => '13',
             ));
        $this->hasColumn('membtype_name', 'string', 120, array(
             'type' => 'string',
             'length' => '120',
             ));
    }

    public function setUp()
    {
        $this->hasMany('EmployeeMemberDetail', array(
             'local' => 'membtype_code',
             'foreign' => 'membtype_code'));

        $this->hasMany('Membership', array(
             'local' => 'membtype_code',
             'foreign' => 'membtype_code'));
    }
}