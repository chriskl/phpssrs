<?php

namespace PhpSsrs\ReportingService2006;

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
   * @var JobActionEnum $Action
   * @access public
   */
  public $Action = null;

  /**
   * 
   * @var JobTypeEnum $Type
   * @access public
   */
  public $Type = null;

  /**
   * 
   * @var JobStatusEnum $Status
   * @access public
   */
  public $Status = null;

  /**
   * 
   * @param string $JobID
   * @param string $Name
   * @param string $Path
   * @param string $Description
   * @param string $Machine
   * @param string $User
   * @param dateTime $StartDateTime
   * @param JobActionEnum $Action
   * @param JobTypeEnum $Type
   * @param JobStatusEnum $Status
   * @access public
   */
  public function __construct($JobID, $Name, $Path, $Description, $Machine, $User, $StartDateTime, $Action, $Type, $Status)
  {
    $this->JobID = $JobID;
    $this->Name = $Name;
    $this->Path = $Path;
    $this->Description = $Description;
    $this->Machine = $Machine;
    $this->User = $User;
    $this->StartDateTime = $StartDateTime;
    $this->Action = $Action;
    $this->Type = $Type;
    $this->Status = $Status;
  }

}
