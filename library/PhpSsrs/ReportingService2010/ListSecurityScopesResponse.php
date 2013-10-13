<?php

namespace PhpSsrs\ReportingService2010;

class ListSecurityScopesResponse
{

  /**
   * 
   * @var String1[] $ListSecurityScopesResult
   * @access public
   */
  public $ListSecurityScopesResult = null;

  /**
   * 
   * @param String1[] $ListSecurityScopesResult
   * @access public
   */
  public function __construct($ListSecurityScopesResult = null)
  {
    $this->ListSecurityScopesResult = $ListSecurityScopesResult;
  }

}
