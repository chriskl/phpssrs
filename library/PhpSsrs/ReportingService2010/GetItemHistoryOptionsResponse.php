<?php

namespace PhpSsrs\ReportingService2010;

class GetItemHistoryOptionsResponse
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
   * @param boolean $EnableManualSnapshotCreation
   * @param boolean $KeepExecutionSnapshots
   * @param ScheduleDefinition $ScheduleDefinition
   * @param ScheduleReference $ScheduleReference
   * @param NoSchedule $NoSchedule
   * @access public
   */
  public function __construct($EnableManualSnapshotCreation = null, $KeepExecutionSnapshots = null, $ScheduleDefinition = null, $ScheduleReference = null, $NoSchedule = null)
  {
    $this->EnableManualSnapshotCreation = $EnableManualSnapshotCreation;
    $this->KeepExecutionSnapshots = $KeepExecutionSnapshots;
    $this->ScheduleDefinition = $ScheduleDefinition;
    $this->ScheduleReference = $ScheduleReference;
    $this->NoSchedule = $NoSchedule;
  }

}
