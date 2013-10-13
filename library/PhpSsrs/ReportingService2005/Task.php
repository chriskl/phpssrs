<?php

namespace PhpSsrs\ReportingService2005;

class Task
{

  /**
   * 
   * @var string $TaskID
   * @access public
   */
  public $TaskID = null;

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
   * @param string $TaskID
   * @param string $Name
   * @param string $Description
   * @access public
   */
  public function __construct($TaskID = null, $Name = null, $Description = null)
  {
    $this->TaskID = $TaskID;
    $this->Name = $Name;
    $this->Description = $Description;
  }

}
