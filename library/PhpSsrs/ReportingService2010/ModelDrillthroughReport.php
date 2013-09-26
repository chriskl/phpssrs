<?php

namespace PhpSsrs\ReportingService2010;

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
  public function __construct($Path, $Type)
  {
    $this->Path = $Path;
    $this->Type = $Type;
  }

}
