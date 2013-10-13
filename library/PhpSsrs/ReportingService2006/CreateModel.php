<?php

namespace PhpSsrs\ReportingService2006;

class CreateModel
{

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
   * @param string $Model
   * @param string $Parent
   * @param base64Binary $Definition
   * @param Property[] $Properties
   * @access public
   */
  public function __construct($Model = null, $Parent = null, $Definition = null, $Properties = null)
  {
    $this->Model = $Model;
    $this->Parent = $Parent;
    $this->Definition = $Definition;
    $this->Properties = $Properties;
  }

}
