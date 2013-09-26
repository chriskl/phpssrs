<?php

namespace PhpSsrs\ReportService2010;

class SetItemHistoryOptions
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

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
   * @param string $ItemPath
   * @param boolean $EnableManualSnapshotCreation
   * @param boolean $KeepExecutionSnapshots
   * @param ScheduleReference $ScheduleReference
   * @param ScheduleDefinition $ScheduleDefinition
   * @param NoSchedule $NoSchedule
   * @access public
   */
  public function __construct($ItemPath, $EnableManualSnapshotCreation, $KeepExecutionSnapshots, $ScheduleReference, $ScheduleDefinition, $NoSchedule)
  {
    $this->ItemPath = $ItemPath;
    $this->EnableManualSnapshotCreation = $EnableManualSnapshotCreation;
    $this->KeepExecutionSnapshots = $KeepExecutionSnapshots;
    $this->ScheduleReference = $ScheduleReference;
    $this->ScheduleDefinition = $ScheduleDefinition;
    $this->NoSchedule = $NoSchedule;
  }

}
