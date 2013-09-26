<?php

namespace PhpSsrs\ReportService2010;

class GetSchedulePropertiesResponse
{

  /**
   * 
   * @var Schedule $Schedule
   * @access public
   */
  public $Schedule = null;

  /**
   * 
   * @param Schedule $Schedule
   * @access public
   */
  public function __construct($Schedule)
  {
    $this->Schedule = $Schedule;
  }

}
