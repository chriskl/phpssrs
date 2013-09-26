<?php

namespace PhpSsrs\ReportService2010;

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
  public function __construct($ItemPath, $Recursive)
  {
    $this->ItemPath = $ItemPath;
    $this->Recursive = $Recursive;
  }

}
