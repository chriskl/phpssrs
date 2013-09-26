<?php

namespace PhpSsrs\ReportingService2010;

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
  public function __construct($DataSourcePrompts)
  {
    $this->DataSourcePrompts = $DataSourcePrompts;
  }

}
