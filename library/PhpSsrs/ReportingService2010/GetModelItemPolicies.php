<?php

namespace PhpSsrs\ReportingService2010;

class GetModelItemPolicies
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
  public function __construct($Model = null, $ModelItemID = null)
  {
    $this->Model = $Model;
    $this->ModelItemID = $ModelItemID;
  }

}
