<?php

namespace PhpSsrs\ReportingService2006;

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
  public function __construct($Roles = null)
  {
    $this->Roles = $Roles;
  }

}
