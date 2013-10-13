<?php

namespace PhpSsrs\ReportingService2006;

class SetReportDefinition
{

  /**
   * 
   * @var string $Report
   * @access public
   */
  public $Report = null;

  /**
   * 
   * @var base64Binary $Definition
   * @access public
   */
  public $Definition = null;

  /**
   * 
   * @param string $Report
   * @param base64Binary $Definition
   * @access public
   */
  public function __construct($Report = null, $Definition = null)
  {
    $this->Report = $Report;
    $this->Definition = $Definition;
  }

}
