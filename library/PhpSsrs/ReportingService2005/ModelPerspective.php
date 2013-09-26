<?php

namespace PhpSsrs\ReportingService2005;

class ModelPerspective
{

  /**
   * 
   * @var string $ID
   * @access public
   */
  public $ID = null;

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
   * @param string $ID
   * @param string $Name
   * @param string $Description
   * @access public
   */
  public function __construct($ID, $Name, $Description)
  {
    $this->ID = $ID;
    $this->Name = $Name;
    $this->Description = $Description;
  }

}
