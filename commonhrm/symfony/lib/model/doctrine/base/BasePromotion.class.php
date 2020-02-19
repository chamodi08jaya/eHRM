<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BasePromotion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_promotion');
        $this->hasColumn('prm_id', 'integer', 20, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '20',
             ));
        $this->hasColumn('emp_number', 'integer', 7, array(
             'type' => 'integer',
             'length' => '7',
             ));
        $this->hasColumn('service_code', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('grade_code', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('jobtit_code', 'string', 13, array(
             'type' => 'string',
             'length' => '13',
             ));
        $this->hasColumn('estat_code', 'string', 13, array(
             'type' => 'string',
             'length' => '13',
             ));
        $this->hasColumn('prm_effective_date', 'date', 25, array(
             'type' => 'date',
             'length' => '25',
             ));
        $this->hasColumn('prm_divition', 'integer', 6, array(
             'type' => 'integer',
             'length' => '6',
             ));
        $this->hasColumn('prm_prev_grade', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('prm_prev_jobtit_code', 'string', 13, array(
             'type' => 'string',
             'length' => '13',
             ));
        $this->hasColumn('prm_prev_emp_status', 'string', 13, array(
             'type' => 'string',
             'length' => '13',
             ));
        $this->hasColumn('prm_prev_work_station', 'integer', 6, array(
             'type' => 'integer',
             'length' => '6',
             ));
        $this->hasColumn('prm_comment', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('prm_method_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('class_code', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('slt_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => '10',
             ));
        $this->hasColumn('level_code', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('emp_salary_inc_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('prm_prev_class_code', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('prm_prev_slt_id', 'integer', 10, array(
             'type' => 'integer',
             'length' => '10',
             ));
        $this->hasColumn('prm_prev_level_code', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('prm_prev_emp_salary_inc_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('prm_commencement_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('prm_prev_service_code', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
    }

    public function setUp()
    {
        $this->hasOne('Employee', array(
             'local' => 'emp_number',
             'foreign' => 'empNumber'));

        $this->hasOne('ServiceDetails', array(
             'local' => 'service_code',
             'foreign' => 'service_code'));

        $this->hasOne('Grade', array(
             'local' => 'grade_code',
             'foreign' => 'grade_code'));

        $this->hasOne('JobTitle', array(
             'local' => 'jobtit_code',
             'foreign' => 'jobtit_code'));

        $this->hasOne('EmployeeStatus', array(
             'local' => 'estat_code',
             'foreign' => 'estat_code'));

        $this->hasOne('CompanyStructure', array(
             'local' => 'prm_divition',
             'foreign' => 'id'));

        $this->hasOne('Grade as cGrade', array(
             'local' => 'prm_prev_grade',
             'foreign' => 'grade_code'));

        $this->hasOne('JobTitle as cJobTitle', array(
             'local' => 'prm_prev_jobtit_code',
             'foreign' => 'jobtit_code'));

        $this->hasOne('EmployeeStatus as cEmployeeStatus', array(
             'local' => 'prm_prev_emp_status',
             'foreign' => 'estat_code'));

        $this->hasOne('CompanyStructure as cCompanyStructure', array(
             'local' => 'prm_prev_work_station',
             'foreign' => 'id'));

        $this->hasOne('PromotionMethod', array(
             'local' => 'prm_method_id',
             'foreign' => 'prm_method_id'));

        $this->hasOne('EmpClass', array(
             'local' => 'class_code',
             'foreign' => 'class_code'));

        $this->hasOne('EmpClass as cEmpClass', array(
             'local' => 'prm_prev_class_code',
             'foreign' => 'class_code'));

        $this->hasOne('GradeSlot', array(
             'local' => 'slt_id',
             'foreign' => 'slt_id'));

        $this->hasOne('GradeSlot as cGradeSlot', array(
             'local' => 'prm_prev_slt_id',
             'foreign' => 'slt_id'));

        $this->hasOne('Level', array(
             'local' => 'level_code',
             'foreign' => 'level_code'));

        $this->hasOne('Level as cLevel', array(
             'local' => 'prm_prev_level_code',
             'foreign' => 'level_code'));

        $this->hasOne('ServiceDetails as cServiceDetails', array(
             'local' => 'prm_prev_service_code',
             'foreign' => 'service_code'));

        $this->hasMany('PromotionAttachment', array(
             'local' => 'prm_id',
             'foreign' => 'prm_id'));

        $this->hasMany('PromotionCnfAttachment', array(
             'local' => 'prm_id',
             'foreign' => 'prm_id'));
    }
}