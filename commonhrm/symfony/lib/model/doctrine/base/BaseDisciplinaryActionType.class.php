<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseDisciplinaryActionType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_dis_action_type');
        $this->hasColumn('dis_acttype_id', 'integer', 8, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '8',
             ));
        $this->hasColumn('dis_acttype_name', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('dis_acttype_name_si', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('dis_acttype_name_ta', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
    }

    public function setUp()
    {
        $this->hasMany('Offence', array(
             'local' => 'dis_acttype_id',
             'foreign' => 'dis_acttype_id'));

        $this->hasMany('Incidents', array(
             'local' => 'dis_acttype_id',
             'foreign' => 'dis_acttype_id'));
    }
}