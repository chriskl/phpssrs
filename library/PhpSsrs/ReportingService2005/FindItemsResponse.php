<?php

namespace PhpSsrs\ReportingService2005;

class FindItemsResponse
{

  /**
   * 
   * @var CatalogItem[] $Items
   * @access public
   */
  public $Items = null;

  /**
   * 
   * @param CatalogItem[] $Items
   * @access public
   */
  public function __construct($Items)
  {
    $this->Items = $Items;
  }

}
