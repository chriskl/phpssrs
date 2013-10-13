<?php

namespace PhpSsrs\ReportingService2005;

class ListSchedulesResponse
{

  /**
   * 
   * @var Schedule[] $Schedules
   * @access public
   */
  public $Schedules = null;

  /**
   * 
   * @param Schedule[] $Schedules
   * @access public
   */
  public function __construct($Schedules = null)
  {
    $this->Schedules = $Schedules;
  }

}
