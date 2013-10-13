<?php

namespace PhpSsrs\ReportingService2006;

class SetReportParameters
{

  /**
   * 
   * @var string $Report
   * @access public
   */
  public $Report = null;

  /**
   * 
   * @var ReportParameter[] $Parameters
   * @access public
   */
  public $Parameters = null;

  /**
   * 
   * @param string $Report
   * @param ReportParameter[] $Parameters
   * @access public
   */
  public function __construct($Report = null, $Parameters = null)
  {
    $this->Report = $Report;
    $this->Parameters = $Parameters;
  }

}
