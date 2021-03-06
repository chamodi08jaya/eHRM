<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseKNWAttachmentDetails extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_knw_attach_details');
        $this->hasColumn('knw_atd_id', 'integer', 20, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '20',
             ));
        $this->hasColumn('knw_doc_id', 'integer', 20, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '20',
             ));
        $this->hasColumn('knw_atd_title', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('knw_atd_title_si', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('knw_atd_title_ta', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('knw_atd_keyword', 'string', 1000, array(
             'type' => 'string',
             'length' => '1000',
             ));
        $this->hasColumn('knw_atd_keyword_si', 'string', 1000, array(
             'type' => 'string',
             'length' => '1000',
             ));
        $this->hasColumn('knw_atd_keyword_ta', 'string', 1000, array(
             'type' => 'string',
             'length' => '1000',
             ));
        $this->hasColumn('knw_atd_post_date', 'date', 25, array(
             'type' => 'date',
             'length' => '25',
             ));
        $this->hasColumn('knw_atd_update_date', 'date', 25, array(
             'type' => 'date',
             'length' => '25',
             ));
    }

    public function setUp()
    {
        $this->hasOne('KNWDocumentType', array(
             'local' => 'knw_doc_id',
             'foreign' => 'knw_doc_id'));

        $this->hasMany('KNWAttachment', array(
             'local' => 'knw_atd_id',
             'foreign' => 'knw_atd_id'));
    }
}