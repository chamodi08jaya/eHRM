<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseEmpQuickLink extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_emp_quicklink');
        $this->hasColumn('qlk_id', 'integer', 20, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '20',
             ));
        $this->hasColumn('qlk_name', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('qlk_name_si', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('qlk_name_ta', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('qlk_link', 'string', 500, array(
             'type' => 'string',
             'length' => '500',
             ));
        $this->hasColumn('qlk_order', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('qlk_active', 'string', 1, array(
             'type' => 'string',
             'length' => '1',
             ));
    }

}