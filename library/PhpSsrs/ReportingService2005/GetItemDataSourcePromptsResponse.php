<?php

namespace PhpSsrs\ReportingService2005;

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
