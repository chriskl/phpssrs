<?php

namespace PhpSsrs\ReportingService2010;

class CreateReportEditSession
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
   * @var base64Binary $Definition
   * @access public
   */
  public $Definition = null;

  /**
   * 
   * @param string $Report
   * @param string $Parent
   * @param base64Binary $Definition
   * @access public
   */
  public function __construct($Report, $Parent, $Definition)
  {
    $this->Report = $Report;
    $this->Parent = $Parent;
    $this->Definition = $Definition;
  }

}
