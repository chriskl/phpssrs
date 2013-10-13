<?php

namespace PhpSsrs\ReportingService2010;

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
