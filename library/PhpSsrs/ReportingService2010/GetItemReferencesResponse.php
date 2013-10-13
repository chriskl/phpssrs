<?php

namespace PhpSsrs\ReportingService2010;

class GetItemReferencesResponse
{

  /**
   * 
   * @var ItemReferenceData[] $ItemReferences
   * @access public
   */
  public $ItemReferences = null;

  /**
   * 
   * @param ItemReferenceData[] $ItemReferences
   * @access public
   */
  public function __construct($ItemReferences = null)
  {
    $this->ItemReferences = $ItemReferences;
  }

}
