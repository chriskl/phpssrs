<?php

namespace PhpSsrs\ReportingService2005;

class GetReportParameters
{

  /**
   * 
   * @var string $Report
   * @access public
   */
  public $Report = null;

  /**
   * 
   * @var string $HistoryID
   * @access public
   */
  public $HistoryID = null;

  /**
   * 
   * @var boolean $ForRendering
   * @access public
   */
  public $ForRendering = null;

  /**
   * 
   * @var ParameterValue[] $Values
   * @access public
   */
  public $Values = null;

  /**
   * 
   * @var DataSourceCredentials[] $Credentials
   * @access public
   */
  public $Credentials = null;

  /**
   * 
   * @param string $Report
   * @param string $HistoryID
   * @param boolean $ForRendering
   * @param ParameterValue[] $Values
   * @param DataSourceCredentials[] $Credentials
   * @access public
   */
  public function __construct($Report, $HistoryID, $ForRendering, $Values, $Credentials)
  {
    $this->Report = $Report;
    $this->HistoryID = $HistoryID;
    $this->ForRendering = $ForRendering;
    $this->Values = $Values;
    $this->Credentials = $Credentials;
  }

}
