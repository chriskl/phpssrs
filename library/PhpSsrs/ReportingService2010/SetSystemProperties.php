<?php

namespace PhpSsrs\ReportingService2010;

class SetSystemProperties
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
