<?php

namespace PhpSsrs\ReportingService2006;

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
   * @var string $Site
   * @access public
   */
  public $Site = null;

  /**
   * 
   * @param string $Name
   * @param ScheduleDefinition $ScheduleDefinition
   * @param string $Site
   * @access public
   */
  public function __construct($Name = null, $ScheduleDefinition = null, $Site = null)
  {
    $this->Name = $Name;
    $this->ScheduleDefinition = $ScheduleDefinition;
    $this->Site = $Site;
  }

}
