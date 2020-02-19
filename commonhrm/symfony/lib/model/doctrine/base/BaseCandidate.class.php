<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseCandidate extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_rec_candidate');
        $this->hasColumn('rec_can_id', 'integer', 7, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '7',
             ));
        $this->hasColumn('rec_req_id', 'integer', 10, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => '10',
             ));
        $this->hasColumn('rec_can_reference_no', 'integer', 7, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => '7',
             ));
        $this->hasColumn('rec_can_nic_number', 'string', 10, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '10',
             ));
        $this->hasColumn('rec_can_candidate_name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '100',
             ));
        $this->hasColumn('rec_can_tel_number', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '20',
             ));
        $this->hasColumn('rec_can_address', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '200',
             ));
        $this->hasColumn('gender_code', 'integer', 2, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => '2',
             ));
        $this->hasColumn('rec_can_birthday', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             ));
        $this->hasColumn('rec_can_edu_qualification', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '200',
             ));
        $this->hasColumn('rec_can_work_experiences', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '200',
             ));
        $this->hasColumn('lang_code', 'string', 13, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '13',
             ));
        $this->hasColumn('rec_can_interview_marks', 'string', 5, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '5',
             ));
        $this->hasColumn('rec_can_interview_status', 'integer', 2, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => '0',
             'length' => '2',
             ));
        $this->hasColumn('rec_can_interview_status_hr', 'integer', 2, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => '0',
             'length' => '2',
             ));
        $this->hasColumn('rec_can_interview_status_dg', 'integer', 2, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => '0',
             'length' => '2',
             ));
    }

    public function setUp()
    {
        $this->hasOne('VacancyRequisition', array(
             'local' => 'rec_req_id',
             'foreign' => 'rec_req_id'));

        $this->hasOne('Gender', array(
             'local' => 'gender_code',
             'foreign' => 'gender_code'));

        $this->hasOne('Language', array(
             'local' => 'lang_code',
             'foreign' => 'lang_code'));

        $this->hasOne('Level', array(
             'local' => 'level_code',
             'foreign' => 'level_code'));

        $this->hasOne('CvAttachment', array(
             'local' => 'rec_can_id',
             'foreign' => 'rec_can_id'));
    }
}