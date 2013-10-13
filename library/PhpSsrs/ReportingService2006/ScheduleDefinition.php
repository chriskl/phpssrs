<?php

namespace PhpSsrs\ReportingService2006;

class ScheduleDefinition
{

  /**
   * 
   * @var dateTime $StartDateTime
   * @access public
   */
  public $StartDateTime = null;

  /**
   * 
   * @var dateTime $EndDate
   * @access public
   */
  public $EndDate = null;

  /**
   * 
   * @var MonthlyRecurrence $MonthlyRecurrence
   * @access public
   */
  public $MonthlyRecurrence = null;

  /**
   * 
   * @var MinuteRecurrence $MinuteRecurrence
   * @access public
   */
  public $MinuteRecurrence = null;

  /**
   * 
   * @var DailyRecurrence $DailyRecurrence
   * @access public
   */
  public $DailyRecurrence = null;

  /**
   * 
   * @var WeeklyRecurrence $WeeklyRecurrence
   * @access public
   */
  public $WeeklyRecurrence = null;

  /**
   * 
   * @var MonthlyDOWRecurrence $MonthlyDOWRecurrence
   * @access public
   */
  public $MonthlyDOWRecurrence = null;

  /**
   * 
   * @param dateTime $StartDateTime
   * @param dateTime $EndDate
   * @param MonthlyRecurrence $MonthlyRecurrence
   * @param MinuteRecurrence $MinuteRecurrence
   * @param DailyRecurrence $DailyRecurrence
   * @param WeeklyRecurrence $WeeklyRecurrence
   * @param MonthlyDOWRecurrence $MonthlyDOWRecurrence
   * @access public
   */
  public function __construct($StartDateTime = null, $EndDate = null, $MonthlyRecurrence = null, $MinuteRecurrence = null, $DailyRecurrence = null, $WeeklyRecurrence = null, $MonthlyDOWRecurrence = null)
  {
    $this->StartDateTime = $StartDateTime;
    $this->EndDate = $EndDate;
    $this->MonthlyRecurrence = $MonthlyRecurrence;
    $this->MinuteRecurrence = $MinuteRecurrence;
    $this->DailyRecurrence = $DailyRecurrence;
    $this->WeeklyRecurrence = $WeeklyRecurrence;
    $this->MonthlyDOWRecurrence = $MonthlyDOWRecurrence;
  }

}
