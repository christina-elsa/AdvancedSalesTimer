<?php

namespace Terrificminds\AdvancedSalesTimer\Model\ResourceModel\AdvancedSalesTimer;

use Terrificminds\AdvancedSalesTimer\Model\AdvancedSalesTimer;
use Terrificminds\AdvancedSalesTimer\Model\ResourceModel\AdvancedSalesTimer as TimerResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Construct function
     */
    protected function _construct()
    {
        $this->_init(
            AdvancedSalesTimer::class,
            TimerResourceModel::class
        );
    }
}

