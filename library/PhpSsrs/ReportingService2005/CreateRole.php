<?php

namespace PhpSsrs\ReportingService2005;

class CreateRole
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
   * @var Task[] $Tasks
   * @access public
   */
  public $Tasks = null;

  /**
   * 
   * @param string $Name
   * @param string $Description
   * @param Task[] $Tasks
   * @access public
   */
  public function __construct($Name, $Description, $Tasks)
  {
    $this->Name = $Name;
    $this->Description = $Description;
    $this->Tasks = $Tasks;
  }

}
