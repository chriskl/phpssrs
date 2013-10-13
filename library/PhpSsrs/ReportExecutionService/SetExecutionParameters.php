<?php

namespace PhpSsrs\ReportExecutionService;

class SetExecutionParameters
{

  /**
   * 
   * @var ParameterValue[] $Parameters
   * @access public
   */
  public $Parameters = null;

  /**
   * 
   * @var string $ParameterLanguage
   * @access public
   */
  public $ParameterLanguage = null;

  /**
   * 
   * @param ParameterValue[] $Parameters
   * @param string $ParameterLanguage
   * @access public
   */
  public function __construct($Parameters = null, $ParameterLanguage = null)
  {
    $this->Parameters = $Parameters;
    $this->ParameterLanguage = $ParameterLanguage;
  }

}
