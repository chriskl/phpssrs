<?php

namespace PhpSsrs\ReportingService2005;

class MoveItem
{

  /**
   * 
   * @var string $Item
   * @access public
   */
  public $Item = null;

  /**
   * 
   * @var string $Target
   * @access public
   */
  public $Target = null;

  /**
   * 
   * @param string $Item
   * @param string $Target
   * @access public
   */
  public function __construct($Item, $Target)
  {
    $this->Item = $Item;
    $this->Target = $Target;
  }

}
