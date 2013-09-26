<?php

namespace PhpSsrs\ReportingService2010;

class GetItemReferences
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @var string $ReferenceItemType
   * @access public
   */
  public $ReferenceItemType = null;

  /**
   * 
   * @param string $ItemPath
   * @param string $ReferenceItemType
   * @access public
   */
  public function __construct($ItemPath, $ReferenceItemType)
  {
    $this->ItemPath = $ItemPath;
    $this->ReferenceItemType = $ReferenceItemType;
  }

}
