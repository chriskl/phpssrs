<?php

namespace PhpSsrs\ReportingService2010;

class Policy
{

  /**
   * 
   * @var string $GroupUserName
   * @access public
   */
  public $GroupUserName = null;

  /**
   * 
   * @var Role[] $Roles
   * @access public
   */
  public $Roles = null;

  /**
   * 
   * @param string $GroupUserName
   * @param Role[] $Roles
   * @access public
   */
  public function __construct($GroupUserName = null, $Roles = null)
  {
    $this->GroupUserName = $GroupUserName;
    $this->Roles = $Roles;
  }

}
