<?php

namespace PhpSsrs\ReportingService2005;

class ListChildren
{

  /**
   * 
   * @var string $Item
   * @access public
   */
  public $Item = null;

  /**
   * 
   * @var boolean $Recursive
   * @access public
   */
  public $Recursive = null;

  /**
   * 
   * @param string $Item
   * @param boolean $Recursive
   * @access public
   */
  public function __construct($Item, $Recursive)
  {
    $this->Item = $Item;
    $this->Recursive = $Recursive;
  }

}
