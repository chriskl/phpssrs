<?php

namespace PhpSsrs\ReportExecutionService;

class NavigateDocumentMap
{

  /**
   * 
   * @var string $DocMapID
   * @access public
   */
  public $DocMapID = null;

  /**
   * 
   * @param string $DocMapID
   * @access public
   */
  public function __construct($DocMapID)
  {
    $this->DocMapID = $DocMapID;
  }

}
