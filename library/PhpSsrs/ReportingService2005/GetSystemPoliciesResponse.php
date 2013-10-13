<?php

namespace PhpSsrs\ReportingService2005;

class GetSystemPoliciesResponse
{

  /**
   * 
   * @var Policy[] $Policies
   * @access public
   */
  public $Policies = null;

  /**
   * 
   * @param Policy[] $Policies
   * @access public
   */
  public function __construct($Policies = null)
  {
    $this->Policies = $Policies;
  }

}
