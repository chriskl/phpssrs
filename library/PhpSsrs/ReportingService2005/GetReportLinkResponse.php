<?php

namespace PhpSsrs\ReportingService2005;

class GetReportLinkResponse
{

  /**
   * 
   * @var string $Link
   * @access public
   */
  public $Link = null;

  /**
   * 
   * @param string $Link
   * @access public
   */
  public function __construct($Link = null)
  {
    $this->Link = $Link;
  }

}
