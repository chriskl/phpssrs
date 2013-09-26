<?php

namespace PhpSsrs\ReportingService2005;

class GetReportParametersResponse
{

  /**
   * 
   * @var ReportParameter[] $Parameters
   * @access public
   */
  public $Parameters = null;

  /**
   * 
   * @param ReportParameter[] $Parameters
   * @access public
   */
  public function __construct($Parameters)
  {
    $this->Parameters = $Parameters;
  }

}
