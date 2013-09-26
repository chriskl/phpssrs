<?php

namespace PhpSsrs\ReportingService2005;

class DailyRecurrence
{

  /**
   * 
   * @var int $DaysInterval
   * @access public
   */
  public $DaysInterval = null;

  /**
   * 
   * @param int $DaysInterval
   * @access public
   */
  public function __construct($DaysInterval)
  {
    $this->DaysInterval = $DaysInterval;
  }

}
