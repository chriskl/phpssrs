<?php

namespace PhpSsrs\ReportingService2005;

class CreateFolder
{

  /**
   * 
   * @var string $Folder
   * @access public
   */
  public $Folder = null;

  /**
   * 
   * @var string $Parent
   * @access public
   */
  public $Parent = null;

  /**
   * 
   * @var Property[] $Properties
   * @access public
   */
  public $Properties = null;

  /**
   * 
   * @param string $Folder
   * @param string $Parent
   * @param Property[] $Properties
   * @access public
   */
  public function __construct($Folder, $Parent, $Properties)
  {
    $this->Folder = $Folder;
    $this->Parent = $Parent;
    $this->Properties = $Properties;
  }

}
