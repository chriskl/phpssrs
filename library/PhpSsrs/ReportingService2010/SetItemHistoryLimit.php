<?php

namespace PhpSsrs\ReportingService2010;

class SetItemHistoryLimit
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @var boolean $UseSystem
   * @access public
   */
  public $UseSystem = null;

  /**
   * 
   * @var int $HistoryLimit
   * @access public
   */
  public $HistoryLimit = null;

  /**
   * 
   * @param string $ItemPath
   * @param boolean $UseSystem
   * @param int $HistoryLimit
   * @access public
   */
  public function __construct($ItemPath, $UseSystem, $HistoryLimit)
  {
    $this->ItemPath = $ItemPath;
    $this->UseSystem = $UseSystem;
    $this->HistoryLimit = $HistoryLimit;
  }

}
