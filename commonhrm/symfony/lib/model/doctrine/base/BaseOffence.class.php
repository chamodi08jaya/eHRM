<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseOffence extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_dis_offence');
        $this->hasColumn('dis_offence_id', 'integer', 8, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '8',
             ));
        $this->hasColumn('dis_acttype_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => '8',
             ));
        $this->hasColumn('dis_offence_name', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('dis_offence_name_si', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('dis_offence_name_ta', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
    }

    public function setUp()
    {
        $this->hasOne('DisciplinaryActionType', array(
             'local' => 'dis_acttype_id',
             'foreign' => 'dis_acttype_id'));

        $this->hasMany('Incidents', array(
             'local' => 'dis_offence_id',
             'foreign' => 'dis_offence_id'));

        $this->hasMany('OffenceList', array(
             'local' => 'dis_offence_id',
             'foreign' => 'dis_offence_id'));
    }
}