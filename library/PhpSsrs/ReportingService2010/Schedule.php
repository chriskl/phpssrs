<?php

namespace PhpSsrs\ReportingService2010;

class Schedule
{

  /**
   * 
   * @var string $ScheduleID
   * @access public
   */
  public $ScheduleID = null;

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var ScheduleDefinition $Definition
   * @access public
   */
  public $Definition = null;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description = null;

  /**
   * 
   * @var string $Creator
   * @access public
   */
  public $Creator = null;

  /**
   * 
   * @var dateTime $NextRunTime
   * @access public
   */
  public $NextRunTime = null;

  /**
   * 
   * @var dateTime $LastRunTime
   * @access public
   */
  public $LastRunTime = null;

  /**
   * 
   * @var boolean $ReferencesPresent
   * @access public
   */
  public $ReferencesPresent = null;

  /**
   * 
   * @var string $ScheduleStateName
   * @access public
   */
  public $ScheduleStateName = null;

  /**
   * 
   * @param string $ScheduleID
   * @param string $Name
   * @param ScheduleDefinition $Definition
   * @param string $Description
   * @param string $Creator
   * @param dateTime $NextRunTime
   * @param dateTime $LastRunTime
   * @param boolean $ReferencesPresent
   * @param string $ScheduleStateName
   * @access public
   */
  public function __construct($ScheduleID = null, $Name = null, $Definition = null, $Description = null, $Creator = null, $NextRunTime = null, $LastRunTime = null, $ReferencesPresent = null, $ScheduleStateName = null)
  {
    $this->ScheduleID = $ScheduleID;
    $this->Name = $Name;
    $this->Definition = $Definition;
    $this->Description = $Description;
    $this->Creator = $Creator;
    $this->NextRunTime = $NextRunTime;
    $this->LastRunTime = $LastRunTime;
    $this->ReferencesPresent = $ReferencesPresent;
    $this->ScheduleStateName = $ScheduleStateName;
  }

}
