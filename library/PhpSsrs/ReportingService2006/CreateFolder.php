<?php

namespace PhpSsrs\ReportingService2006;

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
   * @param string $Folder
   * @param string $Parent
   * @access public
   */
  public function __construct($Folder, $Parent)
  {
    $this->Folder = $Folder;
    $this->Parent = $Parent;
  }

}
