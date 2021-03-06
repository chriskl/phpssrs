<?php

namespace PhpSsrs\ReportingService2010;

class SetModelDrillthroughReports
{

  /**
   * 
   * @var string $Model
   * @access public
   */
  public $Model = null;

  /**
   * 
   * @var string $ModelItemID
   * @access public
   */
  public $ModelItemID = null;

  /**
   * 
   * @var ModelDrillthroughReport[] $Reports
   * @access public
   */
  public $Reports = null;

  /**
   * 
   * @param string $Model
   * @param string $ModelItemID
   * @param ModelDrillthroughReport[] $Reports
   * @access public
   */
  public function __construct($Model = null, $ModelItemID = null, $Reports = null)
  {
    $this->Model = $Model;
    $this->ModelItemID = $ModelItemID;
    $this->Reports = $Reports;
  }

}
