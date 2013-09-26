<?php

namespace PhpSsrs\ReportService2010;

class SetItemDefinition
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

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
   * @param string $ItemPath
   * @param base64Binary $Definition
   * @param Property[] $Properties
   * @access public
   */
  public function __construct($ItemPath, $Definition, $Properties)
  {
    $this->ItemPath = $ItemPath;
    $this->Definition = $Definition;
    $this->Properties = $Properties;
  }

}
