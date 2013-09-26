<?php

namespace PhpSsrs\ReportingService2006;

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
   * @var string $Site
   * @access public
   */
  public $Site = null;

  /**
   * 
   * @param string $Name
   * @param string $Site
   * @access public
   */
  public function __construct($Name, $Site)
  {
    $this->Name = $Name;
    $this->Site = $Site;
  }

}
