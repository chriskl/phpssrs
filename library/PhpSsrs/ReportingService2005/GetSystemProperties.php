<?php

namespace PhpSsrs\ReportingService2005;

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
  public function __construct($Properties = null)
  {
    $this->Properties = $Properties;
  }

}
