<?php

namespace PhpSsrs\ReportingService2010;

class MonthlyRecurrence
{

  /**
   * 
   * @var string $Days
   * @access public
   */
  public $Days = null;

  /**
   * 
   * @var MonthsOfYearSelector $MonthsOfYear
   * @access public
   */
  public $MonthsOfYear = null;

  /**
   * 
   * @param string $Days
   * @param MonthsOfYearSelector $MonthsOfYear
   * @access public
   */
  public function __construct($Days, $MonthsOfYear)
  {
    $this->Days = $Days;
    $this->MonthsOfYear = $MonthsOfYear;
  }

}
