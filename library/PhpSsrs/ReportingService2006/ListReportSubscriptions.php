<?php

namespace PhpSsrs\ReportingService2006;

class ListReportSubscriptions
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