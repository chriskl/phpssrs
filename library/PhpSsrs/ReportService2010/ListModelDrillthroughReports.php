<?php

namespace PhpSsrs\ReportService2010;

class ListModelDrillthroughReports
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
   * @param string $Model
   * @param string $ModelItemID
   * @access public
   */
  public function __construct($Model, $ModelItemID)
  {
    $this->Model = $Model;
    $this->ModelItemID = $ModelItemID;
  }

}
