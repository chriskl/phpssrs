<?php

namespace PhpSsrs\ReportService2010;

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
