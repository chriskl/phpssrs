<?php

namespace PhpSsrs\ReportingService2005;

class GetItemDataSources
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
  public function __construct($Item)
  {
    $this->Item = $Item;
  }

}
