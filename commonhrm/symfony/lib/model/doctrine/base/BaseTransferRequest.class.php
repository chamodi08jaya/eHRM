<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseTransferRequest extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_transfer_request');
        $this->hasColumn('trans_req_id', 'integer', 6, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '6',
             ));
        $this->hasColumn('emp_number', 'integer', 7, array(
             'type' => 'integer',
             'length' => '7',
             ));
        $this->hasColumn('id', 'string', 75, array(
             'type' => 'string',
             'length' => '75',
             ));
        $this->hasColumn('trans_req_location_pref1', 'string', 75, array(
             'type' => 'string',
             'length' => '75',
             ));
        $this->hasColumn('trans_req_location_pref2', 'string', 75, array(
             'type' => 'string',
             'length' => '75',
             ));
        $this->hasColumn('trans_req_location_pref3', 'string', 75, array(
             'type' => 'string',
             'length' => '75',
             ));
        $this->hasColumn('trans_req_admincommnet', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('trans_req_usercommnet', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('trans_req_status', 'string', 1, array(
             'type' => 'string',
             'length' => '1',
             ));
        $this->hasColumn('wfmain_id', 'integer', 50, array(
             'type' => 'integer',
             'length' => '50',
             ));
        $this->hasColumn('wfmain_sequence', 'integer', 50, array(
             'type' => 'integer',
             'length' => '50',
             ));
        $this->hasColumn('def_level', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('trans_req_isapproved', 'string', 1, array(
             'type' => 'string',
             'length' => '1',
             ));
    }

    public function setUp()
    {
        $this->hasOne('Employee', array(
             'local' => 'emp_number',
             'foreign' => 'empNumber'));

        $this->hasOne('Users', array(
             'local' => 'emp_number',
             'foreign' => 'emp_number'));

        $this->hasOne('Transfer', array(
             'local' => 'emp_number',
             'foreign' => 'trans_emp_number'));

        $this->hasOne('CompanyStructure', array(
             'local' => 'id',
             'foreign' => 'id'));

        $this->hasOne('CompanyStructureLevels', array(
             'local' => 'def_level',
             'foreign' => 'def_level'));

        $this->hasOne('WfMain', array(
             'local' => 'wfmain_id',
             'foreign' => 'wfmain_id'));
    }
}