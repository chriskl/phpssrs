<?php

namespace PhpSsrs\ReportingService2005;

class SetPolicies
{

  /**
   * 
   * @var string $Item
   * @access public
   */
  public $Item = null;

  /**
   * 
   * @var Policy[] $Policies
   * @access public
   */
  public $Policies = null;

  /**
   * 
   * @param string $Item
   * @param Policy[] $Policies
   * @access public
   */
  public function __construct($Item, $Policies)
  {
    $this->Item = $Item;
    $this->Policies = $Policies;
  }

}
