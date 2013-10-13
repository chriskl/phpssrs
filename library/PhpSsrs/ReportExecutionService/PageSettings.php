<?php

namespace PhpSsrs\ReportExecutionService;

class PageSettings
{

  /**
   * 
   * @var ReportPaperSize $PaperSize
   * @access public
   */
  public $PaperSize = null;

  /**
   * 
   * @var ReportMargins $Margins
   * @access public
   */
  public $Margins = null;

  /**
   * 
   * @param ReportPaperSize $PaperSize
   * @param ReportMargins $Margins
   * @access public
   */
  public function __construct($PaperSize = null, $Margins = null)
  {
    $this->PaperSize = $PaperSize;
    $this->Margins = $Margins;
  }

}
