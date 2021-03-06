<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BasePromotionMethod extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_promotion_method');
        $this->hasColumn('prm_method_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('prm_method_comment_en', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('prm_method_comment_si', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('prm_method_comment_ta', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
    }

    public function setUp()
    {
        $this->hasMany('Promotion', array(
             'local' => 'prm_method_id',
             'foreign' => 'prm_method_id'));
    }
}