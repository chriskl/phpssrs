<?php

namespace PhpSsrs\ReportExecutionService;

class ExecutionInfo
{

  /**
   * 
   * @var boolean $HasSnapshot
   * @access public
   */
  public $HasSnapshot = null;

  /**
   * 
   * @var boolean $NeedsProcessing
   * @access public
   */
  public $NeedsProcessing = null;

  /**
   * 
   * @var boolean $AllowQueryExecution
   * @access public
   */
  public $AllowQueryExecution = null;

  /**
   * 
   * @var boolean $CredentialsRequired
   * @access public
   */
  public $CredentialsRequired = null;

  /**
   * 
   * @var boolean $ParametersRequired
   * @access public
   */
  public $ParametersRequired = null;

  /**
   * 
   * @var dateTime $ExpirationDateTime
   * @access public
   */
  public $ExpirationDateTime = null;

  /**
   * 
   * @var dateTime $ExecutionDateTime
   * @access public
   */
  public $ExecutionDateTime = null;

  /**
   * 
   * @var int $NumPages
   * @access public
   */
  public $NumPages = null;

  /**
   * 
   * @var ReportParameter[] $Parameters
   * @access public
   */
  public $Parameters = null;

  /**
   * 
   * @var DataSourcePrompt[] $DataSourcePrompts
   * @access public
   */
  public $DataSourcePrompts = null;

  /**
   * 
   * @var boolean $HasDocumentMap
   * @access public
   */
  public $HasDocumentMap = null;

  /**
   * 
   * @var string $ExecutionID
   * @access public
   */
  public $ExecutionID = null;

  /**
   * 
   * @var string $ReportPath
   * @access public
   */
  public $ReportPath = null;

  /**
   * 
   * @var string $HistoryID
   * @access public
   */
  public $HistoryID = null;

  /**
   * 
   * @var PageSettings $ReportPageSettings
   * @access public
   */
  public $ReportPageSettings = null;

  /**
   * 
   * @var int $AutoRefreshInterval
   * @access public
   */
  public $AutoRefreshInterval = null;

  /**
   * 
   * @param boolean $HasSnapshot
   * @param boolean $NeedsProcessing
   * @param boolean $AllowQueryExecution
   * @param boolean $CredentialsRequired
   * @param boolean $ParametersRequired
   * @param dateTime $ExpirationDateTime
   * @param dateTime $ExecutionDateTime
   * @param int $NumPages
   * @param ReportParameter[] $Parameters
   * @param DataSourcePrompt[] $DataSourcePrompts
   * @param boolean $HasDocumentMap
   * @param string $ExecutionID
   * @param string $ReportPath
   * @param string $HistoryID
   * @param PageSettings $ReportPageSettings
   * @param int $AutoRefreshInterval
   * @access public
   */
  public function __construct($HasSnapshot, $NeedsProcessing, $AllowQueryExecution, $CredentialsRequired, $ParametersRequired, $ExpirationDateTime, $ExecutionDateTime, $NumPages, $Parameters, $DataSourcePrompts, $HasDocumentMap, $ExecutionID, $ReportPath, $HistoryID, $ReportPageSettings, $AutoRefreshInterval)
  {
    $this->HasSnapshot = $HasSnapshot;
    $this->NeedsProcessing = $NeedsProcessing;
    $this->AllowQueryExecution = $AllowQueryExecution;
    $this->CredentialsRequired = $CredentialsRequired;
    $this->ParametersRequired = $ParametersRequired;
    $this->ExpirationDateTime = $ExpirationDateTime;
    $this->ExecutionDateTime = $ExecutionDateTime;
    $this->NumPages = $NumPages;
    $this->Parameters = $Parameters;
    $this->DataSourcePrompts = $DataSourcePrompts;
    $this->HasDocumentMap = $HasDocumentMap;
    $this->ExecutionID = $ExecutionID;
    $this->ReportPath = $ReportPath;
    $this->HistoryID = $HistoryID;
    $this->ReportPageSettings = $ReportPageSettings;
    $this->AutoRefreshInterval = $AutoRefreshInterval;
  }

}
