<?php

namespace PhpSsrs\ReportService2010;

class GetSystemProperties
{

  /**
   * 
   * @var Property[] $Properties
   * @access public
   */
  public $Properties = null;

  /**
   * 
   * @param Property[] $Properties
   * @access public
   */
  public function __construct($Properties)
  {
    $this->Properties = $Properties;
  }

}
