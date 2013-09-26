<?php

namespace PhpSsrs\ReportService2010;

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
  public function __construct($MinutesInterval)
  {
    $this->MinutesInterval = $MinutesInterval;
  }

}
