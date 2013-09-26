<?php

namespace PhpSsrs\ReportService2010;

class ListExtensions
{

  /**
   * 
   * @var string $ExtensionType
   * @access public
   */
  public $ExtensionType = null;

  /**
   * 
   * @param string $ExtensionType
   * @access public
   */
  public function __construct($ExtensionType)
  {
    $this->ExtensionType = $ExtensionType;
  }

}
