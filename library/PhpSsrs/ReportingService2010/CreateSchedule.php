<?php

namespace PhpSsrs\ReportingService2010;

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
   * @var string $SiteUrl
   * @access public
   */
  public $SiteUrl = null;

  /**
   * 
   * @param string $Name
   * @param ScheduleDefinition $ScheduleDefinition
   * @param string $SiteUrl
   * @access public
   */
  public function __construct($Name, $ScheduleDefinition, $SiteUrl)
  {
    $this->Name = $Name;
    $this->ScheduleDefinition = $ScheduleDefinition;
    $this->SiteUrl = $SiteUrl;
  }

}
