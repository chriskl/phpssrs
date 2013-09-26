<?php

namespace PhpSsrs\ReportService2010;

class GetCacheRefreshPlanPropertiesResponse
{

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description = null;

  /**
   * 
   * @var string $LastRunStatus
   * @access public
   */
  public $LastRunStatus = null;

  /**
   * 
   * @var CacheRefreshPlanState $State
   * @access public
   */
  public $State = null;

  /**
   * 
   * @var string $EventType
   * @access public
   */
  public $EventType = null;

  /**
   * 
   * @var string $MatchData
   * @access public
   */
  public $MatchData = null;

  /**
   * 
   * @var ParameterValue[] $Parameters
   * @access public
   */
  public $Parameters = null;

  /**
   * 
   * @param string $Description
   * @param string $LastRunStatus
   * @param CacheRefreshPlanState $State
   * @param string $EventType
   * @param string $MatchData
   * @param ParameterValue[] $Parameters
   * @access public
   */
  public function __construct($Description, $LastRunStatus, $State, $EventType, $MatchData, $Parameters)
  {
    $this->Description = $Description;
    $this->LastRunStatus = $LastRunStatus;
    $this->State = $State;
    $this->EventType = $EventType;
    $this->MatchData = $MatchData;
    $this->Parameters = $Parameters;
  }

}
