<?php

namespace PhpSsrs\ReportingService2005;

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
  public function __construct($Model = null)
  {
    $this->Model = $Model;
  }

}
