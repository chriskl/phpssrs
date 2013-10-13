<?php

namespace PhpSsrs\ReportingService2010;

class SetRoleProperties
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
   * @var String1[] $TaskIDs
   * @access public
   */
  public $TaskIDs = null;

  /**
   * 
   * @param string $Name
   * @param string $Description
   * @param String1[] $TaskIDs
   * @access public
   */
  public function __construct($Name = null, $Description = null, $TaskIDs = null)
  {
    $this->Name = $Name;
    $this->Description = $Description;
    $this->TaskIDs = $TaskIDs;
  }

}
