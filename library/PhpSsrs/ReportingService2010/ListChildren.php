<?php

namespace PhpSsrs\ReportingService2010;

class ListChildren
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @var boolean $Recursive
   * @access public
   */
  public $Recursive = null;

  /**
   * 
   * @param string $ItemPath
   * @param boolean $Recursive
   * @access public
   */
  public function __construct($ItemPath = null, $Recursive = null)
  {
    $this->ItemPath = $ItemPath;
    $this->Recursive = $Recursive;
  }

}
