<?php

namespace PhpSsrs\ReportingService2005;

class RegenerateModel
{

  /**
   * 
   * @var string $Model
   * @access public
   */
  public $Model = null;

  /**
   * 
   * @param string $Model
   * @access public
   */
  public function __construct($Model)
  {
    $this->Model = $Model;
  }

}
