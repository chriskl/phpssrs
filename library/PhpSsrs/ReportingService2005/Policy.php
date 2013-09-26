<?php

namespace PhpSsrs\ReportingService2005;

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
  public function __construct($GroupUserName, $Roles)
  {
    $this->GroupUserName = $GroupUserName;
    $this->Roles = $Roles;
  }

}
