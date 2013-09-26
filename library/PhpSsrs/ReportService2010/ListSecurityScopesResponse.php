<?php

namespace PhpSsrs\ReportService2010;

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
  public function __construct($ListSecurityScopesResult)
  {
    $this->ListSecurityScopesResult = $ListSecurityScopesResult;
  }

}
