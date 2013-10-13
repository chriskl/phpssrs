<?php

namespace PhpSsrs\ReportingService2006;

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
   * @param ParameterValue[] $Values
   * @param DataSourceCredentials[] $Credentials
   * @access public
   */
  public function __construct($Report = null, $HistoryID = null, $Values = null, $Credentials = null)
  {
    $this->Report = $Report;
    $this->HistoryID = $HistoryID;
    $this->Values = $Values;
    $this->Credentials = $Credentials;
  }

}
