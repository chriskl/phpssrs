<?php

namespace PhpSsrs\ReportingService2010;

class SetExecutionOptions
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @var string $ExecutionSetting
   * @access public
   */
  public $ExecutionSetting = null;

  /**
   * 
   * @var NoSchedule $NoSchedule
   * @access public
   */
  public $NoSchedule = null;

  /**
   * 
   * @var ScheduleReference $ScheduleReference
   * @access public
   */
  public $ScheduleReference = null;

  /**
   * 
   * @var ScheduleDefinition $ScheduleDefinition
   * @access public
   */
  public $ScheduleDefinition = null;

  /**
   * 
   * @param string $ItemPath
   * @param string $ExecutionSetting
   * @param NoSchedule $NoSchedule
   * @param ScheduleReference $ScheduleReference
   * @param ScheduleDefinition $ScheduleDefinition
   * @access public
   */
  public function __construct($ItemPath, $ExecutionSetting, $NoSchedule, $ScheduleReference, $ScheduleDefinition)
  {
    $this->ItemPath = $ItemPath;
    $this->ExecutionSetting = $ExecutionSetting;
    $this->NoSchedule = $NoSchedule;
    $this->ScheduleReference = $ScheduleReference;
    $this->ScheduleDefinition = $ScheduleDefinition;
  }

}
