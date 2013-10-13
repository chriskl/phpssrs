<?php

namespace PhpSsrs\ReportingService2005;

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
  public function __construct($ModelCatalogItems = null)
  {
    $this->ModelCatalogItems = $ModelCatalogItems;
  }

}
