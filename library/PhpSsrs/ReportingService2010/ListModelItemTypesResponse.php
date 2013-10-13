<?php

namespace PhpSsrs\ReportingService2010;

class ListModelItemTypesResponse
{

  /**
   * 
   * @var String1[] $ListModelItemTypesResult
   * @access public
   */
  public $ListModelItemTypesResult = null;

  /**
   * 
   * @param String1[] $ListModelItemTypesResult
   * @access public
   */
  public function __construct($ListModelItemTypesResult = null)
  {
    $this->ListModelItemTypesResult = $ListModelItemTypesResult;
  }

}
