<?php

namespace PhpSsrs\ReportingService2010;

class GenerateModel
{

  /**
   * 
   * @var string $DataSource
   * @access public
   */
  public $DataSource = null;

  /**
   * 
   * @var string $Model
   * @access public
   */
  public $Model = null;

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
   * @param string $DataSource
   * @param string $Model
   * @param string $Parent
   * @param Property[] $Properties
   * @access public
   */
  public function __construct($DataSource = null, $Model = null, $Parent = null, $Properties = null)
  {
    $this->DataSource = $DataSource;
    $this->Model = $Model;
    $this->Parent = $Parent;
    $this->Properties = $Properties;
  }

}
