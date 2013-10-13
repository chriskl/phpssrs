<?php

namespace PhpSsrs\ReportingService2010;

class ListScheduleStatesResponse
{

  /**
   * 
   * @var String1[] $ListScheduleStatesResult
   * @access public
   */
  public $ListScheduleStatesResult = null;

  /**
   * 
   * @param String1[] $ListScheduleStatesResult
   * @access public
   */
  public function __construct($ListScheduleStatesResult = null)
  {
    $this->ListScheduleStatesResult = $ListScheduleStatesResult;
  }

}
