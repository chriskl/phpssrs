<?php

namespace PhpSsrs\ReportingService2005;

class SetItemDataSources
{

  /**
   * 
   * @var string $Item
   * @access public
   */
  public $Item = null;

  /**
   * 
   * @var DataSource[] $DataSources
   * @access public
   */
  public $DataSources = null;

  /**
   * 
   * @param string $Item
   * @param DataSource[] $DataSources
   * @access public
   */
  public function __construct($Item = null, $DataSources = null)
  {
    $this->Item = $Item;
    $this->DataSources = $DataSources;
  }

}
