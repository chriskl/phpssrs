<?php

namespace PhpSsrs\ReportingService2005;

class SetScheduleProperties
{

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var string $ScheduleID
   * @access public
   */
  public $ScheduleID = null;

  /**
   * 
   * @var ScheduleDefinition $ScheduleDefinition
   * @access public
   */
  public $ScheduleDefinition = null;

  /**
   * 
   * @param string $Name
   * @param string $ScheduleID
   * @param ScheduleDefinition $ScheduleDefinition
   * @access public
   */
  public function __construct($Name, $ScheduleID, $ScheduleDefinition)
  {
    $this->Name = $Name;
    $this->ScheduleID = $ScheduleID;
    $this->ScheduleDefinition = $ScheduleDefinition;
  }

}
