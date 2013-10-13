<?php

namespace PhpSsrs\ReportingService2006;

class ListModelPerspectives
{

  /**
   * 
   * @var string $Path
   * @access public
   */
  public $Path = null;

  /**
   * 
   * @param string $Path
   * @access public
   */
  public function __construct($Path = null)
  {
    $this->Path = $Path;
  }

}
