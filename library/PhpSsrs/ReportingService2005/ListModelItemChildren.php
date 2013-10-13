<?php

namespace PhpSsrs\ReportingService2005;

class ListModelItemChildren
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
   * @var boolean $Recursive
   * @access public
   */
  public $Recursive = null;

  /**
   * 
   * @param string $Model
   * @param string $ModelItemID
   * @param boolean $Recursive
   * @access public
   */
  public function __construct($Model = null, $ModelItemID = null, $Recursive = null)
  {
    $this->Model = $Model;
    $this->ModelItemID = $ModelItemID;
    $this->Recursive = $Recursive;
  }

}
