<?php

namespace PhpSsrs\ReportingService2010;

class SetItemReferences
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @var ItemReference[] $ItemReferences
   * @access public
   */
  public $ItemReferences = null;

  /**
   * 
   * @param string $ItemPath
   * @param ItemReference[] $ItemReferences
   * @access public
   */
  public function __construct($ItemPath, $ItemReferences)
  {
    $this->ItemPath = $ItemPath;
    $this->ItemReferences = $ItemReferences;
  }

}
