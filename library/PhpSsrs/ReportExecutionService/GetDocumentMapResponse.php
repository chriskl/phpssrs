<?php

namespace PhpSsrs\ReportExecutionService;

class GetDocumentMapResponse
{

  /**
   * 
   * @var DocumentMapNode $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param DocumentMapNode $result
   * @access public
   */
  public function __construct($result)
  {
    $this->result = $result;
  }

}
