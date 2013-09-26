<?php

namespace PhpSsrs\ReportingService2006;

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
