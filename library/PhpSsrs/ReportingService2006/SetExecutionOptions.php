<?php

namespace PhpSsrs\ReportingService2006;

class SetExecutionOptions
{

  /**
   * 
   * @var string $Report
   * @access public
   */
  public $Report = null;

  /**
   * 
   * @var ExecutionSettingEnum $ExecutionSetting
   * @access public
   */
  public $ExecutionSetting = null;

  /**
   * 
   * @var ScheduleDefinition $ScheduleDefinition
   * @access public
   */
  public $ScheduleDefinition = null;

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
   * @param string $Report
   * @param ExecutionSettingEnum $ExecutionSetting
   * @param ScheduleDefinition $ScheduleDefinition
   * @param NoSchedule $NoSchedule
   * @param ScheduleReference $ScheduleReference
   * @access public
   */
  public function __construct($Report, $ExecutionSetting, $ScheduleDefinition, $NoSchedule, $ScheduleReference)
  {
    $this->Report = $Report;
    $this->ExecutionSetting = $ExecutionSetting;
    $this->ScheduleDefinition = $ScheduleDefinition;
    $this->NoSchedule = $NoSchedule;
    $this->ScheduleReference = $ScheduleReference;
  }

}
