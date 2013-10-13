<?php

namespace PhpSsrs\ReportingService2006;

class SetModelDefinition
{

  /**
   * 
   * @var string $Model
   * @access public
   */
  public $Model = null;

  /**
   * 
   * @var base64Binary $Definition
   * @access public
   */
  public $Definition = null;

  /**
   * 
   * @param string $Model
   * @param base64Binary $Definition
   * @access public
   */
  public function __construct($Model = null, $Definition = null)
  {
    $this->Model = $Model;
    $this->Definition = $Definition;
  }

}
