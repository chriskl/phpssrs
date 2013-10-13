<?php

namespace PhpSsrs\ReportingService2010;

class WeeklyRecurrence
{

  /**
   * 
   * @var int $WeeksInterval
   * @access public
   */
  public $WeeksInterval = null;

  /**
   * 
   * @var DaysOfWeekSelector $DaysOfWeek
   * @access public
   */
  public $DaysOfWeek = null;

  /**
   * 
   * @param int $WeeksInterval
   * @param DaysOfWeekSelector $DaysOfWeek
   * @access public
   */
  public function __construct($WeeksInterval = null, $DaysOfWeek = null)
  {
    $this->WeeksInterval = $WeeksInterval;
    $this->DaysOfWeek = $DaysOfWeek;
  }

}
