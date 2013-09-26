<?php

namespace PhpSsrs\ReportService2010;

class ItemReferenceData
{

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var string $Reference
   * @access public
   */
  public $Reference = null;

  /**
   * 
   * @var string $ReferenceType
   * @access public
   */
  public $ReferenceType = null;

  /**
   * 
   * @param string $Name
   * @param string $Reference
   * @param string $ReferenceType
   * @access public
   */
  public function __construct($Name, $Reference, $ReferenceType)
  {
    $this->Name = $Name;
    $this->Reference = $Reference;
    $this->ReferenceType = $ReferenceType;
  }

}
