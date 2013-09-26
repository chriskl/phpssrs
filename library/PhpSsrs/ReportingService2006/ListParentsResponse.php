<?php

namespace PhpSsrs\ReportingService2006;

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
  public function __construct($ListParentsResult)
  {
    $this->ListParentsResult = $ListParentsResult;
  }

}
