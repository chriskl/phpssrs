<?php

namespace PhpSsrs\ReportingService2005;

class CreateReport
{

  /**
   * 
   * @var string $Report
   * @access public
   */
  public $Report = null;

  /**
   * 
   * @var string $Parent
   * @access public
   */
  public $Parent = null;

  /**
   * 
   * @var boolean $Overwrite
   * @access public
   */
  public $Overwrite = null;

  /**
   * 
   * @var base64Binary $Definition
   * @access public
   */
  public $Definition = null;

  /**
   * 
   * @var Property[] $Properties
   * @access public
   */
  public $Properties = null;

  /**
   * 
   * @param string $Report
   * @param string $Parent
   * @param boolean $Overwrite
   * @param base64Binary $Definition
   * @param Property[] $Properties
   * @access public
   */
  public function __construct($Report, $Parent, $Overwrite, $Definition, $Properties)
  {
    $this->Report = $Report;
    $this->Parent = $Parent;
    $this->Overwrite = $Overwrite;
    $this->Definition = $Definition;
    $this->Properties = $Properties;
  }

}
