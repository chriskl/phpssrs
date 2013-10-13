<?php

namespace PhpSsrs\ReportingService2010;

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
  public function __construct($Items = null)
  {
    $this->Items = $Items;
  }

}
