<?php

namespace PhpSsrs\ReportingService2010;

class ModelCatalogItem
{

  /**
   * 
   * @var string $Model
   * @access public
   */
  public $Model = null;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description = null;

  /**
   * 
   * @var ModelPerspective[] $Perspectives
   * @access public
   */
  public $Perspectives = null;

  /**
   * 
   * @param string $Model
   * @param string $Description
   * @param ModelPerspective[] $Perspectives
   * @access public
   */
  public function __construct($Model = null, $Description = null, $Perspectives = null)
  {
    $this->Model = $Model;
    $this->Description = $Description;
    $this->Perspectives = $Perspectives;
  }

}
