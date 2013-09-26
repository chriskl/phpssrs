<?php

namespace PhpSsrs\ReportService2010;

class SetSystemPolicies
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
  public function __construct($Policies)
  {
    $this->Policies = $Policies;
  }

}
