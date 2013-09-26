<?php

namespace PhpSsrs\ReportingService2010;

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
  public function __construct($Extension)
  {
    $this->Extension = $Extension;
  }

}
