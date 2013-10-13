<?php

namespace PhpSsrs\ReportingService2006;

class GetRolePropertiesResponse
{

  /**
   * 
   * @var Task[] $Tasks
   * @access public
   */
  public $Tasks = null;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description = null;

  /**
   * 
   * @param Task[] $Tasks
   * @param string $Description
   * @access public
   */
  public function __construct($Tasks = null, $Description = null)
  {
    $this->Tasks = $Tasks;
    $this->Description = $Description;
  }

}
