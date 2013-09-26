<?php

namespace PhpSsrs\ReportingService2006;

class Subscription
{

  /**
   * 
   * @var string $SubscriptionID
   * @access public
   */
  public $SubscriptionID = null;

  /**
   * 
   * @var string $Owner
   * @access public
   */
  public $Owner = null;

  /**
   * 
   * @var string $Path
   * @access public
   */
  public $Path = null;

  /**
   * 
   * @var string $VirtualPath
   * @access public
   */
  public $VirtualPath = null;

  /**
   * 
   * @var string $Report
   * @access public
   */
  public $Report = null;

  /**
   * 
   * @var ExtensionSettings $DeliverySettings
   * @access public
   */
  public $DeliverySettings = null;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description = null;

  /**
   * 
   * @var string $Status
   * @access public
   */
  public $Status = null;

  /**
   * 
   * @var ActiveState $Active
   * @access public
   */
  public $Active = null;

  /**
   * 
   * @var dateTime $LastExecuted
   * @access public
   */
  public $LastExecuted = null;

  /**
   * 
   * @var string $ModifiedBy
   * @access public
   */
  public $ModifiedBy = null;

  /**
   * 
   * @var dateTime $ModifiedDate
   * @access public
   */
  public $ModifiedDate = null;

  /**
   * 
   * @var string $EventType
   * @access public
   */
  public $EventType = null;

  /**
   * 
   * @var boolean $IsDataDriven
   * @access public
   */
  public $IsDataDriven = null;

  /**
   * 
   * @param string $SubscriptionID
   * @param string $Owner
   * @param string $Path
   * @param string $VirtualPath
   * @param string $Report
   * @param ExtensionSettings $DeliverySettings
   * @param string $Description
   * @param string $Status
   * @param ActiveState $Active
   * @param dateTime $LastExecuted
   * @param string $ModifiedBy
   * @param dateTime $ModifiedDate
   * @param string $EventType
   * @param boolean $IsDataDriven
   * @access public
   */
  public function __construct($SubscriptionID, $Owner, $Path, $VirtualPath, $Report, $DeliverySettings, $Description, $Status, $Active, $LastExecuted, $ModifiedBy, $ModifiedDate, $EventType, $IsDataDriven)
  {
    $this->SubscriptionID = $SubscriptionID;
    $this->Owner = $Owner;
    $this->Path = $Path;
    $this->VirtualPath = $VirtualPath;
    $this->Report = $Report;
    $this->DeliverySettings = $DeliverySettings;
    $this->Description = $Description;
    $this->Status = $Status;
    $this->Active = $Active;
    $this->LastExecuted = $LastExecuted;
    $this->ModifiedBy = $ModifiedBy;
    $this->ModifiedDate = $ModifiedDate;
    $this->EventType = $EventType;
    $this->IsDataDriven = $IsDataDriven;
  }

}
