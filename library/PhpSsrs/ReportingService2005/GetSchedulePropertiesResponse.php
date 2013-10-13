<?php

namespace PhpSsrs\ReportingService2005;

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
  public function __construct($Schedule = null)
  {
    $this->Schedule = $Schedule;
  }

}
