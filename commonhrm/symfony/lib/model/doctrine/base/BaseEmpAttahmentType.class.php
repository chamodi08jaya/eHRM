<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseEmpAttahmentType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_emp_attachment_type');
        $this->hasColumn('eattach_type_id', 'integer', 10, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '10',
             ));
        $this->hasColumn('eattach_type_name', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('eattach_type_name_si', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('eattach_type_name_ta', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
    }

    public function setUp()
    {
        $this->hasMany('EmpAttachment', array(
             'local' => 'eattach_type_id',
             'foreign' => 'attach_type_id'));
    }
}