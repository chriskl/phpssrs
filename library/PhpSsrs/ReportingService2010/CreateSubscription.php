<?php

namespace PhpSsrs\ReportingService2010;

class CreateSubscription
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

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
   * @param string $ItemPath
   * @param ExtensionSettings $ExtensionSettings
   * @param string $Description
   * @param string $EventType
   * @param string $MatchData
   * @param ParameterValue[] $Parameters
   * @access public
   */
  public function __construct($ItemPath, $ExtensionSettings, $Description, $EventType, $MatchData, $Parameters)
  {
    $this->ItemPath = $ItemPath;
    $this->ExtensionSettings = $ExtensionSettings;
    $this->Description = $Description;
    $this->EventType = $EventType;
    $this->MatchData = $MatchData;
    $this->Parameters = $Parameters;
  }

}
