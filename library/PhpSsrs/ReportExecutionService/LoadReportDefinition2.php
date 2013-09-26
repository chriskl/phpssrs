<?php

namespace PhpSsrs\ReportExecutionService;

class LoadReportDefinition2
{

  /**
   * 
   * @var base64Binary $Definition
   * @access public
   */
  public $Definition = null;

  /**
   * 
   * @param base64Binary $Definition
   * @access public
   */
  public function __construct($Definition)
  {
    $this->Definition = $Definition;
  }

}
