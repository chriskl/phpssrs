<?php

namespace PhpSsrs\ReportService2010;

class GetSubscriptionPropertiesResponse
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
   * @var ParameterValue[] $Parameters
   * @access public
   */
  public $Parameters = null;

  /**
   * 
   * @param string $Owner
   * @param ExtensionSettings $ExtensionSettings
   * @param string $Description
   * @param ActiveState $Active
   * @param string $Status
   * @param string $EventType
   * @param string $MatchData
   * @param ParameterValue[] $Parameters
   * @access public
   */
  public function __construct($Owner, $ExtensionSettings, $Description, $Active, $Status, $EventType, $MatchData, $Parameters)
  {
    $this->Owner = $Owner;
    $this->ExtensionSettings = $ExtensionSettings;
    $this->Description = $Description;
    $this->Active = $Active;
    $this->Status = $Status;
    $this->EventType = $EventType;
    $this->MatchData = $MatchData;
    $this->Parameters = $Parameters;
  }

}
