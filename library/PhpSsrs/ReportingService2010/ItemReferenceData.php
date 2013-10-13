<?php

namespace PhpSsrs\ReportingService2010;

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
  public function __construct($Name = null, $Reference = null, $ReferenceType = null)
  {
    $this->Name = $Name;
    $this->Reference = $Reference;
    $this->ReferenceType = $ReferenceType;
  }

}
