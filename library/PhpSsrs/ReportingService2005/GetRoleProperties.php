<?php

namespace PhpSsrs\ReportingService2005;

class GetRoleProperties
{

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @param string $Name
   * @access public
   */
  public function __construct($Name)
  {
    $this->Name = $Name;
  }

}
