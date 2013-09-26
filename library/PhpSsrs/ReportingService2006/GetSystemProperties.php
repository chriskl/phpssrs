<?php

namespace PhpSsrs\ReportingService2006;

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
