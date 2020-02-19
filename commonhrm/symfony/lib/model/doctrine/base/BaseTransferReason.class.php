<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseTransferReason extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_trans_reason');
        $this->hasColumn('trans_reason_id', 'integer', 8, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '8',
             ));
        $this->hasColumn('trans_reason_en', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('trans_reason_si', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('trans_reason_ta', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
    }

    public function setUp()
    {
        $this->hasMany('Transfer', array(
             'local' => 'trans_reason_id',
             'foreign' => 'trans_reason_id'));
    }
}