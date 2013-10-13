<?php

namespace PhpSsrs\ReportingService2010;

class GetUserModel
{

  /**
   * 
   * @var string $Model
   * @access public
   */
  public $Model = null;

  /**
   * 
   * @var string $Perspective
   * @access public
   */
  public $Perspective = null;

  /**
   * 
   * @param string $Model
   * @param string $Perspective
   * @access public
   */
  public function __construct($Model = null, $Perspective = null)
  {
    $this->Model = $Model;
    $this->Perspective = $Perspective;
  }

}
