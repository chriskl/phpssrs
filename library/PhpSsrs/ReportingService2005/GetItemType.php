<?php

namespace PhpSsrs\ReportingService2005;

class GetItemType
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
