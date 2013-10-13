<?php

namespace PhpSsrs\ReportingService2006;

class ModelDrillthroughReport
{

  /**
   * 
   * @var string $Path
   * @access public
   */
  public $Path = null;

  /**
   * 
   * @var DrillthroughType $Type
   * @access public
   */
  public $Type = null;

  /**
   * 
   * @param string $Path
   * @param DrillthroughType $Type
   * @access public
   */
  public function __construct($Path = null, $Type = null)
  {
    $this->Path = $Path;
    $this->Type = $Type;
  }

}
