<?php

namespace PhpSsrs\ReportService2010;

class GetItemDefinition
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @param string $ItemPath
   * @access public
   */
  public function __construct($ItemPath)
  {
    $this->ItemPath = $ItemPath;
  }

}
