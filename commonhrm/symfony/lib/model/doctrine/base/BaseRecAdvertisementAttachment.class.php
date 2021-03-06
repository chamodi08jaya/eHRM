<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseRecAdvertisementAttachment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_rec_adv_attachment');
        $this->hasColumn('rec_adv_attach_id', 'integer', 20, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '20',
             ));
        $this->hasColumn('rec_adv_attach_filename', 'string', 200, array(
             'type' => 'string',
             'length' => '200',
             ));
        $this->hasColumn('rec_adv_attach_size', 'integer', 11, array(
             'type' => 'integer',
             'length' => '11',
             ));
        $this->hasColumn('rec_adv_attach_attachment', 'mediumblob', null, array(
             'type' => 'mediumblob',
             ));
        $this->hasColumn('rec_adv_attach_type', 'string', 50, array(
             'type' => 'string',
             'length' => '50',
             ));
        $this->hasColumn('rec_adv_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        $this->hasOne('RecAdvertisement', array(
             'local' => 'rec_adv_id',
             'foreign' => 'rec_adv_id'));
    }
}