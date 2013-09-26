<?php

namespace PhpSsrs\ReportService2010;

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
