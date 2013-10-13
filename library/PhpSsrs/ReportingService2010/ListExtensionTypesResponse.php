<?php

namespace PhpSsrs\ReportingService2010;

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
  public function __construct($ListExtensionTypesResult = null)
  {
    $this->ListExtensionTypesResult = $ListExtensionTypesResult;
  }

}
