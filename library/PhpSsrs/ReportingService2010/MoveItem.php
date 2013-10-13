<?php

namespace PhpSsrs\ReportingService2010;

class MoveItem
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @var string $Target
   * @access public
   */
  public $Target = null;

  /**
   * 
   * @param string $ItemPath
   * @param string $Target
   * @access public
   */
  public function __construct($ItemPath = null, $Target = null)
  {
    $this->ItemPath = $ItemPath;
    $this->Target = $Target;
  }

}
