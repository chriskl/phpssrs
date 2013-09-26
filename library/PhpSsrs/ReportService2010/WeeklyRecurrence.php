<?php

namespace PhpSsrs\ReportService2010;

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
  public function __construct($WeeksInterval, $DaysOfWeek)
  {
    $this->WeeksInterval = $WeeksInterval;
    $this->DaysOfWeek = $DaysOfWeek;
  }

}
