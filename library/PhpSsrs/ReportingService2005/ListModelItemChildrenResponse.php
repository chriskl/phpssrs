<?php

namespace PhpSsrs\ReportingService2005;

class ListModelItemChildrenResponse
{

  /**
   * 
   * @var ModelItem[] $ModelItems
   * @access public
   */
  public $ModelItems = null;

  /**
   * 
   * @param ModelItem[] $ModelItems
   * @access public
   */
  public function __construct($ModelItems = null)
  {
    $this->ModelItems = $ModelItems;
  }

}
