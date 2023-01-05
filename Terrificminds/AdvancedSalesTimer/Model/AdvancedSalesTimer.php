<?php
namespace  Terrificminds\AdvancedSalesTimer\Model;

use Magento\Framework\Model\AbstractModel;
use Terrificminds\AdvancedSalesTimer\Api\Data\TimerInterface;

class AdvancedSalesTimer extends AbstractModel implements TimerInterface
{
    /**
     * @var string
     */
    protected const CACHE_TAG = 'advanced_sales_timer';
    /**
     * @var string
     */
    protected $_cacheTag = 'advanced_sales_timer';
    /**
     * @inheritDoc
     */
    public function getRuleId()
    {
        return parent::getData(self::RULEID);
    }
    

    /**
     * @inheritDoc
     */
    public function setRuleId($rule_id)
    {
        return $this->setData(self::RULEID, $rule_id);
    }

    /**
     * @inheritDoc
     */
    public function getTimerId()
    {
        return parent::getData(self::TIMERID);
    }

    /**
     * @inheritDoc
     */
    public function setTimerId($timer_id)
    {
        return $this->setData(self::TIMERID, $timer_id);
    }

    /**
     * @inheritDoc
     */
    public function getEnabled()
    {
        return parent::getData(self::ENABLED);
    }

    /**
     * @inheritDoc
     */
    public function setEnabled($enabled)
    {
        return $this->setData(self::ENABLED, $enabled);
    }
     /**
      * @inheritDoc
      */
    public function getFromTime()
    {
        return parent::getData(self::FROMTIME);
    }

    /**
     * @inheritDoc
     */
    public function setFromTime($from_time)
    {
        return $this->setData(self::FROMTIME, $from_time);
    }

    /**
      * @inheritDoc
      */
      public function getToTime()
      {
          return parent::getData(self::TOTIME);
      }
  
      /**
       * @inheritDoc
       */
      public function setToTime($to_time)
      {
          return $this->setData(self::TOTIME, $to_time);
      }

    /**
     * @inheritDoc
     */
    public function getDescription()
    {
        return parent::getData(self::Description);
    }

    /**
     * @inheritDoc
     */
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    /**
     * 
     * @inheritDoc
     */
    public function getBeforeTimer()
    {
        return parent::getData(self::BEFORETIMER);
    }

    /**
     * @inheritDoc
     */
    public function setBeforeTimer($before_timer)
    {
        return $this->setData(self::BEFORETIMER, $before_timer);
    }

      /**
     * @inheritDoc
     */
    public function getDescriptionBefore()
    {
        return parent::getData(self::DESCRIPTIONBEFORE);
    }

    /**
     * @inheritDoc
     */
    public function setQuestion5($qn5)
    {
        return $this->setData(self::QUESTION5, $qn5);
    }

      /**
     * @inheritDoc
     */
    public function getImage()
    {
        return parent::getData(self::IMAGE);
    }

    /**
     * @inheritDoc
     */
    public function setImage($path)
    {
        return $this->setData(self::IMAGE, $path);
    }

    /**
     * Construct function
     */
    protected function _construct()
    {
        $this->_init(ResourceModel\CustomSurveyForm::class);
    }

    /**
     * GetIdentities function
     *
     * @return id
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * GetDefaultValues function
     *
     * @return array
     */
    public function getDefaultValues()
    {
        $values = [];
        return $values;
    }
}