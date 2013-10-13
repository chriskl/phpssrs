<?php

namespace PhpSsrs\ReportingService2005;

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
   * @var ScheduleReference $ScheduleReference
   * @access public
   */
  public $ScheduleReference = null;

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
   * @param ExecutionSettingEnum $ExecutionSetting
   * @param ScheduleReference $ScheduleReference
   * @param NoSchedule $NoSchedule
   * @param ScheduleDefinition $ScheduleDefinition
   * @access public
   */
  public function __construct($ExecutionSetting = null, $ScheduleReference = null, $NoSchedule = null, $ScheduleDefinition = null)
  {
    $this->ExecutionSetting = $ExecutionSetting;
    $this->ScheduleReference = $ScheduleReference;
    $this->NoSchedule = $NoSchedule;
    $this->ScheduleDefinition = $ScheduleDefinition;
  }

}
