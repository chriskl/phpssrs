<?php

namespace PhpSsrs\ReportingService2006;

class DeleteSchedule
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
  public function __construct($ScheduleID)
  {
    $this->ScheduleID = $ScheduleID;
  }

}
