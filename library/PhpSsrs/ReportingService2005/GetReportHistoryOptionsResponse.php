<?php

namespace PhpSsrs\ReportingService2005;

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
   * @param boolean $EnableManualSnapshotCreation
   * @param boolean $KeepExecutionSnapshots
   * @param ScheduleDefinition $ScheduleDefinition
   * @param NoSchedule $NoSchedule
   * @param ScheduleReference $ScheduleReference
   * @access public
   */
  public function __construct($EnableManualSnapshotCreation = null, $KeepExecutionSnapshots = null, $ScheduleDefinition = null, $NoSchedule = null, $ScheduleReference = null)
  {
    $this->EnableManualSnapshotCreation = $EnableManualSnapshotCreation;
    $this->KeepExecutionSnapshots = $KeepExecutionSnapshots;
    $this->ScheduleDefinition = $ScheduleDefinition;
    $this->NoSchedule = $NoSchedule;
    $this->ScheduleReference = $ScheduleReference;
  }

}
