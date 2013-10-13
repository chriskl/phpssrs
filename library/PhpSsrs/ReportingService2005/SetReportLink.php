<?php

namespace PhpSsrs\ReportingService2005;

class SetReportLink
{

  /**
   * 
   * @var string $Report
   * @access public
   */
  public $Report = null;

  /**
   * 
   * @var string $Link
   * @access public
   */
  public $Link = null;

  /**
   * 
   * @param string $Report
   * @param string $Link
   * @access public
   */
  public function __construct($Report = null, $Link = null)
  {
    $this->Report = $Report;
    $this->Link = $Link;
  }

}
