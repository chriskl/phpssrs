<?php

namespace PhpSsrs\ReportingService2005;

class GetExtensionSettings
{

  /**
   * 
   * @var string $Extension
   * @access public
   */
  public $Extension = null;

  /**
   * 
   * @param string $Extension
   * @access public
   */
  public function __construct($Extension = null)
  {
    $this->Extension = $Extension;
  }

}
