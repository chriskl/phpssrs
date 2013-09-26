<?php

namespace PhpSsrs\ReportingService2005;

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
  public function __construct($Model, $Perspective)
  {
    $this->Model = $Model;
    $this->Perspective = $Perspective;
  }

}
