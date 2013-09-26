<?php

namespace PhpSsrs\ReportService2010;

class ActiveState
{

  /**
   * 
   * @var boolean $DeliveryExtensionRemoved
   * @access public
   */
  public $DeliveryExtensionRemoved = null;

  /**
   * 
   * @var boolean $SharedDataSourceRemoved
   * @access public
   */
  public $SharedDataSourceRemoved = null;

  /**
   * 
   * @var boolean $MissingParameterValue
   * @access public
   */
  public $MissingParameterValue = null;

  /**
   * 
   * @var boolean $InvalidParameterValue
   * @access public
   */
  public $InvalidParameterValue = null;

  /**
   * 
   * @var boolean $UnknownReportParameter
   * @access public
   */
  public $UnknownReportParameter = null;

  /**
   * 
   * @param boolean $DeliveryExtensionRemoved
   * @param boolean $SharedDataSourceRemoved
   * @param boolean $MissingParameterValue
   * @param boolean $InvalidParameterValue
   * @param boolean $UnknownReportParameter
   * @access public
   */
  public function __construct($DeliveryExtensionRemoved, $SharedDataSourceRemoved, $MissingParameterValue, $InvalidParameterValue, $UnknownReportParameter)
  {
    $this->DeliveryExtensionRemoved = $DeliveryExtensionRemoved;
    $this->SharedDataSourceRemoved = $SharedDataSourceRemoved;
    $this->MissingParameterValue = $MissingParameterValue;
    $this->InvalidParameterValue = $InvalidParameterValue;
    $this->UnknownReportParameter = $UnknownReportParameter;
  }

}
