<?php

namespace PhpSsrs\ReportingService2005;

class SetReportHistoryOptions
{

  /**
   * 
   * @var string $Report
   * @access public
   */
  public $Report = null;

  /**
   * 
   * @var boolean $EnableManualSnapshotCreation
   * @access public
   */
  public $EnableManualSnapshotCreation = null;

  /**
   * 
   * @var boolean $KeepExecutionSnapshots
   * @access public
   */
  public $KeepExecutionSnapshots = null;

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
   * @param string $Report
   * @param boolean $EnableManualSnapshotCreation
   * @param boolean $KeepExecutionSnapshots
   * @param ScheduleReference $ScheduleReference
   * @param NoSchedule $NoSchedule
   * @param ScheduleDefinition $ScheduleDefinition
   * @access public
   */
  public function __construct($Report, $EnableManualSnapshotCreation, $KeepExecutionSnapshots, $ScheduleReference, $NoSchedule, $ScheduleDefinition)
  {
    $this->Report = $Report;
    $this->EnableManualSnapshotCreation = $EnableManualSnapshotCreation;
    $this->KeepExecutionSnapshots = $KeepExecutionSnapshots;
    $this->ScheduleReference = $ScheduleReference;
    $this->NoSchedule = $NoSchedule;
    $this->ScheduleDefinition = $ScheduleDefinition;
  }

}
