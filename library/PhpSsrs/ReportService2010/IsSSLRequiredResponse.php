<?php

namespace PhpSsrs\ReportService2010;

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
  public function __construct($IsSSLRequiredResult)
  {
    $this->IsSSLRequiredResult = $IsSSLRequiredResult;
  }

}
