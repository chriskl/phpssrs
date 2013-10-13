<?php

namespace PhpSsrs\ReportingService2010;

class DataSourcePrompt
{

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var string $DataSourceID
   * @access public
   */
  public $DataSourceID = null;

  /**
   * 
   * @var string $Prompt
   * @access public
   */
  public $Prompt = null;

  /**
   * 
   * @param string $Name
   * @param string $DataSourceID
   * @param string $Prompt
   * @access public
   */
  public function __construct($Name = null, $DataSourceID = null, $Prompt = null)
  {
    $this->Name = $Name;
    $this->DataSourceID = $DataSourceID;
    $this->Prompt = $Prompt;
  }

}
