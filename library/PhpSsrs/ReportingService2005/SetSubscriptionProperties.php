<?php

namespace PhpSsrs\ReportingService2005;

class SetSubscriptionProperties
{

  /**
   * 
   * @var string $SubscriptionID
   * @access public
   */
  public $SubscriptionID = null;

  /**
   * 
   * @var ExtensionSettings $ExtensionSettings
   * @access public
   */
  public $ExtensionSettings = null;

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
   * @param string $SubscriptionID
   * @param ExtensionSettings $ExtensionSettings
   * @param string $Description
   * @param string $EventType
   * @param string $MatchData
   * @param ParameterValue[] $Parameters
   * @access public
   */
  public function __construct($SubscriptionID = null, $ExtensionSettings = null, $Description = null, $EventType = null, $MatchData = null, $Parameters = null)
  {
    $this->SubscriptionID = $SubscriptionID;
    $this->ExtensionSettings = $ExtensionSettings;
    $this->Description = $Description;
    $this->EventType = $EventType;
    $this->MatchData = $MatchData;
    $this->Parameters = $Parameters;
  }

}
