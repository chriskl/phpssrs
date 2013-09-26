<?php

namespace PhpSsrs\ReportingService2010;

class ListModelPerspectives
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
