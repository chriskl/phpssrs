<?php

namespace PhpSsrs\ReportingService2010;

class SetDataDrivenSubscriptionProperties
{

  /**
   * 
   * @var string $DataDrivenSubscriptionID
   * @access public
   */
  public $DataDrivenSubscriptionID = null;

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
   * @param string $DataDrivenSubscriptionID
   * @param ExtensionSettings $ExtensionSettings
   * @param DataRetrievalPlan $DataRetrievalPlan
   * @param string $Description
   * @param string $EventType
   * @param string $MatchData
   * @param ParameterValueOrFieldReference[] $Parameters
   * @access public
   */
  public function __construct($DataDrivenSubscriptionID, $ExtensionSettings, $DataRetrievalPlan, $Description, $EventType, $MatchData, $Parameters)
  {
    $this->DataDrivenSubscriptionID = $DataDrivenSubscriptionID;
    $this->ExtensionSettings = $ExtensionSettings;
    $this->DataRetrievalPlan = $DataRetrievalPlan;
    $this->Description = $Description;
    $this->EventType = $EventType;
    $this->MatchData = $MatchData;
    $this->Parameters = $Parameters;
  }

}
