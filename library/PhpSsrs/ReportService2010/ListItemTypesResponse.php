<?php

namespace PhpSsrs\ReportService2010;

class ListItemTypesResponse
{

  /**
   * 
   * @var String1[] $ListItemTypesResult
   * @access public
   */
  public $ListItemTypesResult = null;

  /**
   * 
   * @param String1[] $ListItemTypesResult
   * @access public
   */
  public function __construct($ListItemTypesResult)
  {
    $this->ListItemTypesResult = $ListItemTypesResult;
  }

}
