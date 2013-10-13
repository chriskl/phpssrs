<?php

namespace PhpSsrs\ReportingService2006;

class ListChildrenResponse
{

  /**
   * 
   * @var CatalogItem[] $CatalogItems
   * @access public
   */
  public $CatalogItems = null;

  /**
   * 
   * @param CatalogItem[] $CatalogItems
   * @access public
   */
  public function __construct($CatalogItems = null)
  {
    $this->CatalogItems = $CatalogItems;
  }

}
