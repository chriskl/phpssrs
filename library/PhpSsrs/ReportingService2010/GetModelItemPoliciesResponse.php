<?php

namespace PhpSsrs\ReportingService2010;

class GetModelItemPoliciesResponse
{

  /**
   * 
   * @var Policy[] $Policies
   * @access public
   */
  public $Policies = null;

  /**
   * 
   * @var boolean $InheritParent
   * @access public
   */
  public $InheritParent = null;

  /**
   * 
   * @param Policy[] $Policies
   * @param boolean $InheritParent
   * @access public
   */
  public function __construct($Policies, $InheritParent)
  {
    $this->Policies = $Policies;
    $this->InheritParent = $InheritParent;
  }

}
