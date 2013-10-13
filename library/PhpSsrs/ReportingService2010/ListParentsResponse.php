<?php

namespace PhpSsrs\ReportingService2010;

class ListParentsResponse
{

  /**
   * 
   * @var CatalogItem[] $ListParentsResult
   * @access public
   */
  public $ListParentsResult = null;

  /**
   * 
   * @param CatalogItem[] $ListParentsResult
   * @access public
   */
  public function __construct($ListParentsResult = null)
  {
    $this->ListParentsResult = $ListParentsResult;
  }

}
