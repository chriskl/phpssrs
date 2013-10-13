<?php

namespace PhpSsrs\ReportingService2010;

class ListParameterStatesResponse
{

  /**
   * 
   * @var String1[] $ListParameterStatesResult
   * @access public
   */
  public $ListParameterStatesResult = null;

  /**
   * 
   * @param String1[] $ListParameterStatesResult
   * @access public
   */
  public function __construct($ListParameterStatesResult = null)
  {
    $this->ListParameterStatesResult = $ListParameterStatesResult;
  }

}
