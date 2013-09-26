<?php

namespace PhpSsrs\ReportingService2005;

class ListSecureMethodsResponse
{

  /**
   * 
   * @var String[] $ListSecureMethodsResult
   * @access public
   */
  public $ListSecureMethodsResult = null;

  /**
   * 
   * @param String[] $ListSecureMethodsResult
   * @access public
   */
  public function __construct($ListSecureMethodsResult)
  {
    $this->ListSecureMethodsResult = $ListSecureMethodsResult;
  }

}
