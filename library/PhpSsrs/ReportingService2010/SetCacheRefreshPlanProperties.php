<?php

namespace PhpSsrs\ReportingService2010;

class SetCacheRefreshPlanProperties
{

  /**
   * 
   * @var string $CacheRefreshPlanID
   * @access public
   */
  public $CacheRefreshPlanID = null;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description = null;

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
   * @param string $CacheRefreshPlanID
   * @param string $Description
   * @param string $EventType
   * @param string $MatchData
   * @param ParameterValue[] $Parameters
   * @access public
   */
  public function __construct($CacheRefreshPlanID, $Description, $EventType, $MatchData, $Parameters)
  {
    $this->CacheRefreshPlanID = $CacheRefreshPlanID;
    $this->Description = $Description;
    $this->EventType = $EventType;
    $this->MatchData = $MatchData;
    $this->Parameters = $Parameters;
  }

}
