<?php

namespace PhpSsrs\ReportService2010;

class SetItemLink
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @var string $Link
   * @access public
   */
  public $Link = null;

  /**
   * 
   * @param string $ItemPath
   * @param string $Link
   * @access public
   */
  public function __construct($ItemPath, $Link)
  {
    $this->ItemPath = $ItemPath;
    $this->Link = $Link;
  }

}
