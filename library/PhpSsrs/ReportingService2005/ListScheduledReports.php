<?php

namespace PhpSsrs\ReportingService2005;

class ListScheduledReports
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
