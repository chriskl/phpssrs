<?php

namespace PhpSsrs\ReportService2010;

class ListExtensionTypesResponse
{

  /**
   * 
   * @var String1[] $ListExtensionTypesResult
   * @access public
   */
  public $ListExtensionTypesResult = null;

  /**
   * 
   * @param String1[] $ListExtensionTypesResult
   * @access public
   */
  public function __construct($ListExtensionTypesResult)
  {
    $this->ListExtensionTypesResult = $ListExtensionTypesResult;
  }

}
