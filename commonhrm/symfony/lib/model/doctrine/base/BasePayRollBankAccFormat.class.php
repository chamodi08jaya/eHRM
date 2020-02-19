<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BasePayRollBankAccFormat extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_pr_bank_acc_format');
        $this->hasColumn('acc_fmt_code', 'decimal', 10, array(
             'type' => 'decimal',
             'scale' => 0,
             'primary' => true,
             'length' => '10',
             ));
        $this->hasColumn('acc_fmt_exprs', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '100',
             ));
        $this->hasColumn('acc_fmt_desc', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('acc_fmt_errmsg', 'string', 500, array(
             'type' => 'string',
             'length' => '500',
             ));
    }

    public function setUp()
    {
        $this->hasMany('PayRollBank', array(
             'local' => 'acc_fmt_code',
             'foreign' => 'acc_fmt_code'));
    }
}