<?php

namespace PhpSsrs\ReportingService2005;

class CreateLinkedReport
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
   * @var string $Link
   * @access public
   */
  public $Link = null;

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
   * @param string $Link
   * @param Property[] $Properties
   * @access public
   */
  public function __construct($Report, $Parent, $Link, $Properties)
  {
    $this->Report = $Report;
    $this->Parent = $Parent;
    $this->Link = $Link;
    $this->Properties = $Properties;
  }

}
