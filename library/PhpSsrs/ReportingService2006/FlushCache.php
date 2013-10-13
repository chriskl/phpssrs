<?php

namespace PhpSsrs\ReportingService2006;

class FlushCache
{

  /**
   * 
   * @var string $Report
   * @access public
   */
  public $Report = null;

  /**
   * 
   * @param string $Report
   * @access public
   */
  public function __construct($Report = null)
  {
    $this->Report = $Report;
  }

}
