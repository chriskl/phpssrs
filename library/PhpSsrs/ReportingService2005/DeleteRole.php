<?php

namespace PhpSsrs\ReportingService2005;

class DeleteRole
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
  public function __construct($Name = null)
  {
    $this->Name = $Name;
  }

}
