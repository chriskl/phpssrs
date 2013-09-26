<?php

namespace PhpSsrs\ReportingService2006;

class SetModelItemPolicies
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
   * @var Policy[] $Policies
   * @access public
   */
  public $Policies = null;

  /**
   * 
   * @param string $Model
   * @param string $ModelItemID
   * @param Policy[] $Policies
   * @access public
   */
  public function __construct($Model, $ModelItemID, $Policies)
  {
    $this->Model = $Model;
    $this->ModelItemID = $ModelItemID;
    $this->Policies = $Policies;
  }

}
