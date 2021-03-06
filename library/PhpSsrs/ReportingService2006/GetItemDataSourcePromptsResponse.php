<?php

namespace PhpSsrs\ReportingService2006;

class GetItemDataSourcePromptsResponse
{

  /**
   * 
   * @var DataSourcePrompt[] $DataSourcePrompts
   * @access public
   */
  public $DataSourcePrompts = null;

  /**
   * 
   * @param DataSourcePrompt[] $DataSourcePrompts
   * @access public
   */
  public function __construct($DataSourcePrompts = null)
  {
    $this->DataSourcePrompts = $DataSourcePrompts;
  }

}
