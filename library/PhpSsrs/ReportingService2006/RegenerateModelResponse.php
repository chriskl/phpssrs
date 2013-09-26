<?php

namespace PhpSsrs\ReportingService2006;

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
  public function __construct($Warnings)
  {
    $this->Warnings = $Warnings;
  }

}
