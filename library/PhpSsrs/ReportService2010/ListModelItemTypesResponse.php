<?php

namespace PhpSsrs\ReportService2010;

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
  public function __construct($ListModelItemTypesResult)
  {
    $this->ListModelItemTypesResult = $ListModelItemTypesResult;
  }

}
