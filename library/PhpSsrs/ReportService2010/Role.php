<?php

namespace PhpSsrs\ReportService2010;

class Role
{

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description = null;

  /**
   * 
   * @param string $Name
   * @param string $Description
   * @access public
   */
  public function __construct($Name, $Description)
  {
    $this->Name = $Name;
    $this->Description = $Description;
  }

}
