<?php

namespace PhpSsrs\ReportService2010;

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
  public function __construct($ItemReferences)
  {
    $this->ItemReferences = $ItemReferences;
  }

}
