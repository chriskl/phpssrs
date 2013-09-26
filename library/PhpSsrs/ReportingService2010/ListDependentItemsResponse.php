<?php

namespace PhpSsrs\ReportingService2010;

class ListDependentItemsResponse
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
