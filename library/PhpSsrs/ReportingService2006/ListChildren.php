<?php

namespace PhpSsrs\ReportingService2006;

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
   * @param string $Item
   * @access public
   */
  public function __construct($Item = null)
  {
    $this->Item = $Item;
  }

}
