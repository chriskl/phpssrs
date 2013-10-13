<?php

namespace PhpSsrs\ReportingService2010;

class CreateScheduleResponse
{

  /**
   * 
   * @var string $ScheduleID
   * @access public
   */
  public $ScheduleID = null;

  /**
   * 
   * @param string $ScheduleID
   * @access public
   */
  public function __construct($ScheduleID = null)
  {
    $this->ScheduleID = $ScheduleID;
  }

}
