<?php

namespace PhpSsrs\ReportingService2010;

class SetItemDataSources
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @var DataSource[] $DataSources
   * @access public
   */
  public $DataSources = null;

  /**
   * 
   * @param string $ItemPath
   * @param DataSource[] $DataSources
   * @access public
   */
  public function __construct($ItemPath = null, $DataSources = null)
  {
    $this->ItemPath = $ItemPath;
    $this->DataSources = $DataSources;
  }

}
