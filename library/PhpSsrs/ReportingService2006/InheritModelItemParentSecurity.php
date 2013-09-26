<?php

namespace PhpSsrs\ReportingService2006;

class InheritModelItemParentSecurity
{

  /**
   * 
   * @var string $Model
   * @access public
   */
  public $Model = null;

  /**
   * 
   * @var string $ModelItemID
   * @access public
   */
  public $ModelItemID = null;

  /**
   * 
   * @param string $Model
   * @param string $ModelItemID
   * @access public
   */
  public function __construct($Model, $ModelItemID)
  {
    $this->Model = $Model;
    $this->ModelItemID = $ModelItemID;
  }

}
