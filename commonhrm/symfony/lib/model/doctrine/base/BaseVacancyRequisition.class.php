<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseVacancyRequisition extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_rec_vacancy_requisition');
        $this->hasColumn('rec_req_id', 'integer', 7, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '7',
             ));
        $this->hasColumn('rec_req_ref_number', 'string', 15, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '15',
             ));
        $this->hasColumn('rec_req_vacancy_title', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '100',
             ));
        $this->hasColumn('rec_req_vacancy_title_si', 'string', 100, array(
             'type' => 'string',
             'default' => '',
             'length' => '100',
             ));
        $this->hasColumn('rec_req_vacancy_title_ta', 'string', 100, array(
             'type' => 'string',
             'default' => '',
             'length' => '100',
             ));
        $this->hasColumn('rec_req_year', 'integer', 3, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => '3',
             ));
        $this->hasColumn('cmp_stur_id', 'integer', 3, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => '3',
             ));
        $this->hasColumn('grade_code', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => '4',
             ));
        $this->hasColumn('jobtit_code', 'string', 13, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '13',
             ));
        $this->hasColumn('report_to', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '100',
             ));
        $this->hasColumn('estat_code', 'string', 13, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '13',
             ));
        $this->hasColumn('rec_req_qualification', 'string', 300, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '300',
             ));
        $this->hasColumn('rec_req_qualification_si', 'string', 300, array(
             'type' => 'string',
             'length' => '300',
             ));
        $this->hasColumn('rec_req_qualification_ta', 'string', 300, array(
             'type' => 'string',
             'length' => '300',
             ));
        $this->hasColumn('rec_req_opening_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('rec_req_closing_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('rec_req_requested_vacancies', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => '4',
             ));
        $this->hasColumn('rec_req_approved_vacancies', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => '4',
             ));
        $this->hasColumn('rec_req_recruitment_type', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '100',
             ));
    }

    public function setUp()
    {
        $this->hasOne('CompanyStructure', array(
             'local' => 'cmp_stur_id',
             'foreign' => 'id'));

        $this->hasOne('Grade', array(
             'local' => 'grade_code',
             'foreign' => 'grade_code'));

        $this->hasOne('JobTitle', array(
             'local' => 'jobtit_code',
             'foreign' => 'jobtit_code'));

        $this->hasOne('EmployeeStatus', array(
             'local' => 'estat_code',
             'foreign' => 'estat_code'));

        $this->hasOne('WfMain', array(
             'local' => 'wfmain_id',
             'foreign' => 'wfmain_id'));

        $this->hasMany('Advertisement', array(
             'local' => 'rec_req_id',
             'foreign' => 'rec_req_id'));

        $this->hasMany('Candidate', array(
             'local' => 'rec_req_id',
             'foreign' => 'rec_req_id'));
    }
}