<?php

namespace PhpSsrs\ReportingService2005;

class ScheduleReference
{

  /**
   * 
   * @var string $ScheduleID
   * @access public
   */
  public $ScheduleID = null;

  /**
   * 
   * @var ScheduleDefinition $Definition
   * @access public
   */
  public $Definition = null;

  /**
   * 
   * @param string $ScheduleID
   * @param ScheduleDefinition $Definition
   * @access public
   */
  public function __construct($ScheduleID = null, $Definition = null)
  {
    $this->ScheduleID = $ScheduleID;
    $this->Definition = $Definition;
  }

}
