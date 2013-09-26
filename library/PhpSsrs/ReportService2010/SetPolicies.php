<?php

namespace PhpSsrs\ReportService2010;

class SetPolicies
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @var Policy[] $Policies
   * @access public
   */
  public $Policies = null;

  /**
   * 
   * @param string $ItemPath
   * @param Policy[] $Policies
   * @access public
   */
  public function __construct($ItemPath, $Policies)
  {
    $this->ItemPath = $ItemPath;
    $this->Policies = $Policies;
  }

}
