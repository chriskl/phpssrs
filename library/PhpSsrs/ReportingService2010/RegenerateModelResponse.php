<?php

namespace PhpSsrs\ReportingService2010;

class RegenerateModelResponse
{

  /**
   * 
   * @var Warning[] $Warnings
   * @access public
   */
  public $Warnings = null;

  /**
   * 
   * @param Warning[] $Warnings
   * @access public
   */
  public function __construct($Warnings = null)
  {
    $this->Warnings = $Warnings;
  }

}
