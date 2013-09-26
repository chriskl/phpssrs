<?php

namespace PhpSsrs\ReportingService2006;

class GetModelItemPermissionsResponse
{

  /**
   * 
   * @var String[] $Permissions
   * @access public
   */
  public $Permissions = null;

  /**
   * 
   * @param String[] $Permissions
   * @access public
   */
  public function __construct($Permissions)
  {
    $this->Permissions = $Permissions;
  }

}
