<?php

namespace PhpSsrs\ReportingService2010;

class CreateCatalogItemResponse
{

  /**
   * 
   * @var CatalogItem $ItemInfo
   * @access public
   */
  public $ItemInfo = null;

  /**
   * 
   * @var Warning[] $Warnings
   * @access public
   */
  public $Warnings = null;

  /**
   * 
   * @param CatalogItem $ItemInfo
   * @param Warning[] $Warnings
   * @access public
   */
  public function __construct($ItemInfo = null, $Warnings = null)
  {
    $this->ItemInfo = $ItemInfo;
    $this->Warnings = $Warnings;
  }

}
