<?php

namespace PhpSsrs\ReportingService2010;

class IsSSLRequiredResponse
{

  /**
   * 
   * @var boolean $IsSSLRequiredResult
   * @access public
   */
  public $IsSSLRequiredResult = null;

  /**
   * 
   * @param boolean $IsSSLRequiredResult
   * @access public
   */
  public function __construct($IsSSLRequiredResult = null)
  {
    $this->IsSSLRequiredResult = $IsSSLRequiredResult;
  }

}
