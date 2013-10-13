<?php

namespace PhpSsrs\ReportingService2005;

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
  public function __construct($Properties = null)
  {
    $this->Properties = $Properties;
  }

}
