<?php

namespace PhpSsrs\ReportingService2006;

class ListExtensions
{

  /**
   * 
   * @var ExtensionTypeEnum $ExtensionType
   * @access public
   */
  public $ExtensionType = null;

  /**
   * 
   * @param ExtensionTypeEnum $ExtensionType
   * @access public
   */
  public function __construct($ExtensionType)
  {
    $this->ExtensionType = $ExtensionType;
  }

}