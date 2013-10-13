<?php

namespace PhpSsrs\ReportingService2010;

class ListItemHistoryResponse
{

  /**
   * 
   * @var ItemHistorySnapshot[] $ItemHistory
   * @access public
   */
  public $ItemHistory = null;

  /**
   * 
   * @param ItemHistorySnapshot[] $ItemHistory
   * @access public
   */
  public function __construct($ItemHistory = null)
  {
    $this->ItemHistory = $ItemHistory;
  }

}
