<?php

namespace PhpSsrs\ReportingService2010;

class SetItemParameters
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @var ItemParameter[] $Parameters
   * @access public
   */
  public $Parameters = null;

  /**
   * 
   * @param string $ItemPath
   * @param ItemParameter[] $Parameters
   * @access public
   */
  public function __construct($ItemPath = null, $Parameters = null)
  {
    $this->ItemPath = $ItemPath;
    $this->Parameters = $Parameters;
  }

}
