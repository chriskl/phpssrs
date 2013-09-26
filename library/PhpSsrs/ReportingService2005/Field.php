<?php

namespace PhpSsrs\ReportingService2005;

class Field
{

  /**
   * 
   * @var string $Alias
   * @access public
   */
  public $Alias = null;

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @param string $Alias
   * @param string $Name
   * @access public
   */
  public function __construct($Alias, $Name)
  {
    $this->Alias = $Alias;
    $this->Name = $Name;
  }

}
