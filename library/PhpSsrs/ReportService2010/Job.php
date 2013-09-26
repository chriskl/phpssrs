<?php

namespace PhpSsrs\ReportService2010;

class Job
{

  /**
   * 
   * @var string $JobID
   * @access public
   */
  public $JobID = null;

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var string $Path
   * @access public
   */
  public $Path = null;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description = null;

  /**
   * 
   * @var string $Machine
   * @access public
   */
  public $Machine = null;

  /**
   * 
   * @var string $User
   * @access public
   */
  public $User = null;

  /**
   * 
   * @var dateTime $StartDateTime
   * @access public
   */
  public $StartDateTime = null;

  /**
   * 
   * @var string $JobActionName
   * @access public
   */
  public $JobActionName = null;

  /**
   * 
   * @var string $JobTypeName
   * @access public
   */
  public $JobTypeName = null;

  /**
   * 
   * @var string $JobStatusName
   * @access public
   */
  public $JobStatusName = null;

  /**
   * 
   * @param string $JobID
   * @param string $Name
   * @param string $Path
   * @param string $Description
   * @param string $Machine
   * @param string $User
   * @param dateTime $StartDateTime
   * @param string $JobActionName
   * @param string $JobTypeName
   * @param string $JobStatusName
   * @access public
   */
  public function __construct($JobID, $Name, $Path, $Description, $Machine, $User, $StartDateTime, $JobActionName, $JobTypeName, $JobStatusName)
  {
    $this->JobID = $JobID;
    $this->Name = $Name;
    $this->Path = $Path;
    $this->Description = $Description;
    $this->Machine = $Machine;
    $this->User = $User;
    $this->StartDateTime = $StartDateTime;
    $this->JobActionName = $JobActionName;
    $this->JobTypeName = $JobTypeName;
    $this->JobStatusName = $JobStatusName;
  }

}
