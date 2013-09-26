<?php

namespace PhpSsrs\ReportingService2010;

class MonthlyDOWRecurrence
{

  /**
   * 
   * @var WeekNumberEnum $WhichWeek
   * @access public
   */
  public $WhichWeek = null;

  /**
   * 
   * @var DaysOfWeekSelector $DaysOfWeek
   * @access public
   */
  public $DaysOfWeek = null;

  /**
   * 
   * @var MonthsOfYearSelector $MonthsOfYear
   * @access public
   */
  public $MonthsOfYear = null;

  /**
   * 
   * @param WeekNumberEnum $WhichWeek
   * @param DaysOfWeekSelector $DaysOfWeek
   * @param MonthsOfYearSelector $MonthsOfYear
   * @access public
   */
  public function __construct($WhichWeek, $DaysOfWeek, $MonthsOfYear)
  {
    $this->WhichWeek = $WhichWeek;
    $this->DaysOfWeek = $DaysOfWeek;
    $this->MonthsOfYear = $MonthsOfYear;
  }

}
