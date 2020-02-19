<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseEmployeeLeaveAccrual extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_emp_leave_accrual');
        $this->hasColumn('acc_id', 'integer', 11, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '11',
             ));
        $this->hasColumn('leave_type_id', 'string', 13, array(
             'type' => 'string',
             'length' => '13',
             ));
        $this->hasColumn('employee_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('leave_period_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('acc_time', 'date', 25, array(
             'type' => 'date',
             'length' => '25',
             ));
        $this->hasColumn('acc_days', 'decimal', 4, array(
             'type' => 'decimal',
             'length' => '4',
             ));
    }

    public function setUp()
    {
        $this->hasOne('LeaveType', array(
             'local' => 'leave_type_id',
             'foreign' => 'leaveTypeId'));

        $this->hasOne('Employee', array(
             'local' => 'employee_id',
             'foreign' => 'empNumber'));

        $this->hasOne('LeavePeriod', array(
             'local' => 'leave_period_id',
             'foreign' => 'leavePeriodId'));
    }
}