<?php

namespace PhpSsrs\ReportingService2005;

class GetDataDrivenSubscriptionPropertiesResponse
{

  /**
   * 
   * @var string $Owner
   * @access public
   */
  public $Owner = null;

  /**
   * 
   * @var ExtensionSettings $ExtensionSettings
   * @access public
   */
  public $ExtensionSettings = null;

  /**
   * 
   * @var DataRetrievalPlan $DataRetrievalPlan
   * @access public
   */
  public $DataRetrievalPlan = null;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description = null;

  /**
   * 
   * @var ActiveState $Active
   * @access public
   */
  public $Active = null;

  /**
   * 
   * @var string $Status
   * @access public
   */
  public $Status = null;

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
   * @var ParameterValueOrFieldReference[] $Parameters
   * @access public
   */
  public $Parameters = null;

  /**
   * 
   * @param string $Owner
   * @param ExtensionSettings $ExtensionSettings
   * @param DataRetrievalPlan $DataRetrievalPlan
   * @param string $Description
   * @param ActiveState $Active
   * @param string $Status
   * @param string $EventType
   * @param string $MatchData
   * @param ParameterValueOrFieldReference[] $Parameters
   * @access public
   */
  public function __construct($Owner = null, $ExtensionSettings = null, $DataRetrievalPlan = null, $Description = null, $Active = null, $Status = null, $EventType = null, $MatchData = null, $Parameters = null)
  {
    $this->Owner = $Owner;
    $this->ExtensionSettings = $ExtensionSettings;
    $this->DataRetrievalPlan = $DataRetrievalPlan;
    $this->Description = $Description;
    $this->Active = $Active;
    $this->Status = $Status;
    $this->EventType = $EventType;
    $this->MatchData = $MatchData;
    $this->Parameters = $Parameters;
  }

}
