<?php

namespace PhpSsrs\ReportingService2005;

class MinuteRecurrence
{

  /**
   * 
   * @var int $MinutesInterval
   * @access public
   */
  public $MinutesInterval = null;

  /**
   * 
   * @param int $MinutesInterval
   * @access public
   */
  public function __construct($MinutesInterval = null)
  {
    $this->MinutesInterval = $MinutesInterval;
  }

}
