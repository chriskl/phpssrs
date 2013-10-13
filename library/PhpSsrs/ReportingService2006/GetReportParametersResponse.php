<?php

namespace PhpSsrs\ReportingService2006;

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
  public function __construct($Parameters = null)
  {
    $this->Parameters = $Parameters;
  }

}
