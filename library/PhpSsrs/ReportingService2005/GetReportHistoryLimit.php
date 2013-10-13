<?php

namespace PhpSsrs\ReportingService2005;

class GetReportHistoryLimit
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
