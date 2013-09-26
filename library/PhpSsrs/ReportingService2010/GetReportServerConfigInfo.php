<?php

namespace PhpSsrs\ReportingService2010;

class GetReportServerConfigInfo
{

  /**
   * 
   * @var boolean $ScaleOut
   * @access public
   */
  public $ScaleOut = null;

  /**
   * 
   * @param boolean $ScaleOut
   * @access public
   */
  public function __construct($ScaleOut)
  {
    $this->ScaleOut = $ScaleOut;
  }

}
