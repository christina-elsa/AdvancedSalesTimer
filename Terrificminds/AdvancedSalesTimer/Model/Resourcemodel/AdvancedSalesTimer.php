<?php

namespace Terrificminds\AdvancedSalestimer\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class CustomSurveyForm extends AbstractDb
{
    /**
     * table name
     */
    protected const MAIN_TABLE = 'catalogrule_salestimer';
    /**
     * primary id
     */
    protected const ID_FIELD_NAME = 'timer_id';

    /**
     * Construct function
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
    }
}

