<?php

namespace PhpSsrs\ReportingService2006;

class ListModelPerspectivesResponse
{

  /**
   * 
   * @var ModelCatalogItem[] $ModelCatalogItems
   * @access public
   */
  public $ModelCatalogItems = null;

  /**
   * 
   * @param ModelCatalogItem[] $ModelCatalogItems
   * @access public
   */
  public function __construct($ModelCatalogItems)
  {
    $this->ModelCatalogItems = $ModelCatalogItems;
  }

}
