<?php

namespace PhpSsrs\ReportingService2006;

class GetReportHistoryOptions
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
  public function __construct($Report)
  {
    $this->Report = $Report;
  }

}
