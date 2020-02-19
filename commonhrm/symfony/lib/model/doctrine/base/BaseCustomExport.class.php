<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseCustomExport extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_custom_export');
        $this->hasColumn('export_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '4',
             ));
        $this->hasColumn('name', 'string', 250, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '250',
             ));
        $this->hasColumn('fields', 'string', 2147483647, array(
             'type' => 'string',
             'length' => '2147483647',
             ));
        $this->hasColumn('headings', 'string', 2147483647, array(
             'type' => 'string',
             'length' => '2147483647',
             ));
    }

}