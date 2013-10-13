<?php

namespace PhpSsrs\ReportingService2005;

class ItemNamespaceHeader
{

  /**
   * 
   * @var ItemNamespaceEnum $ItemNamespace
   * @access public
   */
  public $ItemNamespace = null;

  /**
   * 
   * @param ItemNamespaceEnum $ItemNamespace
   * @access public
   */
  public function __construct($ItemNamespace = null)
  {
    $this->ItemNamespace = $ItemNamespace;
  }

}
