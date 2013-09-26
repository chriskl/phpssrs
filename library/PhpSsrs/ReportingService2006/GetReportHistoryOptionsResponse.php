<?php

namespace PhpSsrs\ReportingService2006;

class GetReportHistoryOptionsResponse
{

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
   * @param boolean $EnableManualSnapshotCreation
   * @param boolean $KeepExecutionSnapshots
   * @param ScheduleReference $ScheduleReference
   * @param NoSchedule $NoSchedule
   * @param ScheduleDefinition $ScheduleDefinition
   * @access public
   */
  public function __construct($EnableManualSnapshotCreation, $KeepExecutionSnapshots, $ScheduleReference, $NoSchedule, $ScheduleDefinition)
  {
    $this->EnableManualSnapshotCreation = $EnableManualSnapshotCreation;
    $this->KeepExecutionSnapshots = $KeepExecutionSnapshots;
    $this->ScheduleReference = $ScheduleReference;
    $this->NoSchedule = $NoSchedule;
    $this->ScheduleDefinition = $ScheduleDefinition;
  }

}
