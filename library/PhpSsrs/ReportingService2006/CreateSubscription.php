<?php

namespace PhpSsrs\ReportingService2006;

class CreateSubscription
{

  /**
   * 
   * @var string $Report
   * @access public
   */
  public $Report = null;

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
   * @param string $Report
   * @param ExtensionSettings $ExtensionSettings
   * @param string $Description
   * @param string $EventType
   * @param string $MatchData
   * @param ParameterValue[] $Parameters
   * @access public
   */
  public function __construct($Report, $ExtensionSettings, $Description, $EventType, $MatchData, $Parameters)
  {
    $this->Report = $Report;
    $this->ExtensionSettings = $ExtensionSettings;
    $this->Description = $Description;
    $this->EventType = $EventType;
    $this->MatchData = $MatchData;
    $this->Parameters = $Parameters;
  }

}
