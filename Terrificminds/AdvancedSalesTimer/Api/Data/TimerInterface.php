<?php
namespace Terrificminds\CustomSurveyForm\Api\Data;

/**
 * @api
 * @since 100.0.2
 */
interface TimerInterface
{
    /**#@+
     * Constants defined for keys of  data array
     */
    public const RULEID = 'rule_id';
    public const TIMERID = 'timer_id';
    public const ENABLED = 'is_enabled';
    public const FROMTIME = 'from_time';
    public const TOTIME = 'to_time';
    public const DESCRIPTION = 'description';
    public const BEFORETIMER = 'before_timer';
    public const DESCRIPTIONBEFORE = 'description_before';
    public const ATTRIBUTES = [
        self::RULEID,
        self::TIMERID,
        self::ENABLED,
        self::FROMTIME,
        self::TOTIME,
        self::DESCRIPTION,
        self::BEFORETIMER,
        self::DESCRIPTIONBEFORE
    ];
    /**
     *  RuleId
     *
     * @return int|null
     */
    public function getRuleId();

    /**
     * Set  RuleId
     *
     * @param int $rule_id
     * @return $this
     */
    public function setRuleId($rule_id);
    /**
     * TimerId
     *
     * @return string|null
     */
    public function getTimerId();

    /**
     * Set TimerId
     *
     * @param string $timer_id
     * @return $this
     */
    public function setTimerId($timer_id);
     /**
      * Enabled
      *
      * @return string|null
      */
    public function getEnabled();

    /**
     * Set Enabled
     *
     * @param string $enabled
     * @return $this
     */
    public function setEnabled($enabled);

    /**
      * FromTime
      *
      * @return string|null
      */
      public function getFromTime();

      /**
       * Set FromTime
       *
       * @param string $from_time
       * @return $this
       */
      public function setFromTime($from_time);

       /**
      * ToTime
      *
      * @return string|null
      */
      public function getToTime();

      /**
       * Set ToTime
       *
       * @param string $to_time
       * @return $this
       */
      public function setToTime($to_time);

       /**
      * Description
      *
      * @return string|null
      */
      public function getDescription();

      /**
       * Set Description
       *
       * @param string $description
       * @return $this
       */
      public function setDescription($description);
/**
      * BeforeTimer
      *
      * @return string|null
      */
      public function getBeforeTimer();

      /**
       * Set BeforeTimer
       *
       * @param string $before_timer
       * @return $this
       */
      public function setBeforeTimer($before_timer);

      /**
      * DescriptionBefore
      *
      * @return string|null
      */
      public function getDescriptionBefore();

      /**
       * Set DescriptionBefore
       *
       * @param string $description_before
       * @return $this
       */
      public function setDescriptionBefore($description_before);
      
}