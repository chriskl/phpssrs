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
  public function __construct($Model, $Description, $Perspectives)
  {
    $this->Model = $Model;
    $this->Description = $Description;
    $this->Perspectives = $Perspectives;
  }

}
