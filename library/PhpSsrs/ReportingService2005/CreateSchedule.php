<?php

namespace PhpSsrs\ReportingService2005;

class CreateSchedule
{

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var ScheduleDefinition $ScheduleDefinition
   * @access public
   */
  public $ScheduleDefinition = null;

  /**
   * 
   * @param string $Name
   * @param ScheduleDefinition $ScheduleDefinition
   * @access public
   */
  public function __construct($Name, $ScheduleDefinition)
  {
    $this->Name = $Name;
    $this->ScheduleDefinition = $ScheduleDefinition;
  }

}
