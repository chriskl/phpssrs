<?php

namespace PhpSsrs\ReportingService2006;

class GetExecutionOptionsResponse
{

  /**
   * 
   * @var ExecutionSettingEnum $ExecutionSetting
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
   * @var ScheduleDefinition $ScheduleDefinition
   * @access public
   */
  public $ScheduleDefinition = null;

  /**
   * 
   * @var ScheduleReference $ScheduleReference
   * @access public
   */
  public $ScheduleReference = null;

  /**
   * 
   * @param ExecutionSettingEnum $ExecutionSetting
   * @param NoSchedule $NoSchedule
   * @param ScheduleDefinition $ScheduleDefinition
   * @param ScheduleReference $ScheduleReference
   * @access public
   */
  public function __construct($ExecutionSetting, $NoSchedule, $ScheduleDefinition, $ScheduleReference)
  {
    $this->ExecutionSetting = $ExecutionSetting;
    $this->NoSchedule = $NoSchedule;
    $this->ScheduleDefinition = $ScheduleDefinition;
    $this->ScheduleReference = $ScheduleReference;
  }

}
