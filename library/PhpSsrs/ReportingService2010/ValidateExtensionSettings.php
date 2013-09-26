<?php

namespace PhpSsrs\ReportingService2010;

class ValidateExtensionSettings
{

  /**
   * 
   * @var string $Extension
   * @access public
   */
  public $Extension = null;

  /**
   * 
   * @var ParameterValueOrFieldReference[] $ParameterValues
   * @access public
   */
  public $ParameterValues = null;

  /**
   * 
   * @var string $SiteUrl
   * @access public
   */
  public $SiteUrl = null;

  /**
   * 
   * @param string $Extension
   * @param ParameterValueOrFieldReference[] $ParameterValues
   * @param string $SiteUrl
   * @access public
   */
  public function __construct($Extension, $ParameterValues, $SiteUrl)
  {
    $this->Extension = $Extension;
    $this->ParameterValues = $ParameterValues;
    $this->SiteUrl = $SiteUrl;
  }

}
