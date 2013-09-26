<?php

namespace PhpSsrs\ReportingService2005;

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
  public function __construct($CatalogItems)
  {
    $this->CatalogItems = $CatalogItems;
  }

}
