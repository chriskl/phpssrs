<?php

namespace PhpSsrs\ReportingService2010;

class ListParameterTypesResponse
{

  /**
   * 
   * @var String1[] $ListParameterTypesResult
   * @access public
   */
  public $ListParameterTypesResult = null;

  /**
   * 
   * @param String1[] $ListParameterTypesResult
   * @access public
   */
  public function __construct($ListParameterTypesResult)
  {
    $this->ListParameterTypesResult = $ListParameterTypesResult;
  }

}
