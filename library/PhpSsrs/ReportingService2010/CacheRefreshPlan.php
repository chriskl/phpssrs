<?php

namespace PhpSsrs\ReportingService2010;

class CacheRefreshPlan
{

  /**
   * 
   * @var string $CacheRefreshPlanID
   * @access public
   */
  public $CacheRefreshPlanID = null;

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description = null;

  /**
   * 
   * @var CacheRefreshPlanState $State
   * @access public
   */
  public $State = null;

  /**
   * 
   * @var dateTime $LastExecuted
   * @access public
   */
  public $LastExecuted = null;

  /**
   * 
   * @var dateTime $ModifiedDate
   * @access public
   */
  public $ModifiedDate = null;

  /**
   * 
   * @var string $ModifiedBy
   * @access public
   */
  public $ModifiedBy = null;

  /**
   * 
   * @var string $LastRunStatus
   * @access public
   */
  public $LastRunStatus = null;

  /**
   * 
   * @param string $CacheRefreshPlanID
   * @param string $ItemPath
   * @param string $Description
   * @param CacheRefreshPlanState $State
   * @param dateTime $LastExecuted
   * @param dateTime $ModifiedDate
   * @param string $ModifiedBy
   * @param string $LastRunStatus
   * @access public
   */
  public function __construct($CacheRefreshPlanID = null, $ItemPath = null, $Description = null, $State = null, $LastExecuted = null, $ModifiedDate = null, $ModifiedBy = null, $LastRunStatus = null)
  {
    $this->CacheRefreshPlanID = $CacheRefreshPlanID;
    $this->ItemPath = $ItemPath;
    $this->Description = $Description;
    $this->State = $State;
    $this->LastExecuted = $LastExecuted;
    $this->ModifiedDate = $ModifiedDate;
    $this->ModifiedBy = $ModifiedBy;
    $this->LastRunStatus = $LastRunStatus;
  }

}
