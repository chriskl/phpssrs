<?php

namespace PhpSsrs\ReportingService2006;

class CreateFolderResponse
{

  /**
   * 
   * @var CatalogItem $ItemInfo
   * @access public
   */
  public $ItemInfo = null;

  /**
   * 
   * @param CatalogItem $ItemInfo
   * @access public
   */
  public function __construct($ItemInfo)
  {
    $this->ItemInfo = $ItemInfo;
  }

}
