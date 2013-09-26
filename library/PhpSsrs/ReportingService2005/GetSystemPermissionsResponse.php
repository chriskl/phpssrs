<?php

namespace PhpSsrs\ReportingService2005;

class GetSystemPermissionsResponse
{

  /**
   * 
   * @var String3[] $Permissions
   * @access public
   */
  public $Permissions = null;

  /**
   * 
   * @param String3[] $Permissions
   * @access public
   */
  public function __construct($Permissions)
  {
    $this->Permissions = $Permissions;
  }

}
