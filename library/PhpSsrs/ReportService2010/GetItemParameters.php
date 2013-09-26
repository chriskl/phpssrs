<?php

namespace PhpSsrs\ReportService2010;

class GetItemParameters
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

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
   * @param string $ItemPath
   * @param string $HistoryID
   * @param boolean $ForRendering
   * @param ParameterValue[] $Values
   * @param DataSourceCredentials[] $Credentials
   * @access public
   */
  public function __construct($ItemPath, $HistoryID, $ForRendering, $Values, $Credentials)
  {
    $this->ItemPath = $ItemPath;
    $this->HistoryID = $HistoryID;
    $this->ForRendering = $ForRendering;
    $this->Values = $Values;
    $this->Credentials = $Credentials;
  }

}
