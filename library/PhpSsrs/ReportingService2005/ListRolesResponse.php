<?php

namespace PhpSsrs\ReportingService2005;

class ListRolesResponse
{

  /**
   * 
   * @var Role[] $Roles
   * @access public
   */
  public $Roles = null;

  /**
   * 
   * @param Role[] $Roles
   * @access public
   */
  public function __construct($Roles)
  {
    $this->Roles = $Roles;
  }

}
