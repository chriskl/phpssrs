<?php

namespace PhpSsrs\ReportService2010;

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
  public function __construct($ListParameterStatesResult)
  {
    $this->ListParameterStatesResult = $ListParameterStatesResult;
  }

}
