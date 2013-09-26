<?php

namespace PhpSsrs\ReportingService2010;

class GetReportServerConfigInfoResponse
{

  /**
   * 
   * @var string $ServerConfigInfo
   * @access public
   */
  public $ServerConfigInfo = null;

  /**
   * 
   * @param string $ServerConfigInfo
   * @access public
   */
  public function __construct($ServerConfigInfo)
  {
    $this->ServerConfigInfo = $ServerConfigInfo;
  }

}
