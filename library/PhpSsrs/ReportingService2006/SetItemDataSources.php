<?php

namespace PhpSsrs\ReportingService2006;

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
  public function __construct($Item, $DataSources)
  {
    $this->Item = $Item;
    $this->DataSources = $DataSources;
  }

}
