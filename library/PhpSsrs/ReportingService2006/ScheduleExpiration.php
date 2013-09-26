<?php

namespace PhpSsrs\ReportingService2006;

class ScheduleExpiration
{

  /**
   * 
   * @var ScheduleDefinition $ScheduleDefinition
   * @access public
   */
  public $ScheduleDefinition = null;

  /**
   * 
   * @var ScheduleReference $ScheduleReference
   * @access public
   */
  public $ScheduleReference = null;

  /**
   * 
   * @param ScheduleDefinition $ScheduleDefinition
   * @param ScheduleReference $ScheduleReference
   * @access public
   */
  public function __construct($ScheduleDefinition, $ScheduleReference)
  {
    $this->ScheduleDefinition = $ScheduleDefinition;
    $this->ScheduleReference = $ScheduleReference;
  }

}
