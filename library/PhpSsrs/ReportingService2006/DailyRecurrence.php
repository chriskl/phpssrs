<?php

namespace PhpSsrs\ReportingService2006;

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
  public function __construct($DaysInterval = null)
  {
    $this->DaysInterval = $DaysInterval;
  }

}
