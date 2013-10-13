<?php

namespace PhpSsrs\ReportExecutionService;

class DocumentMapNode
{

  /**
   * 
   * @var string $Label
   * @access public
   */
  public $Label = null;

  /**
   * 
   * @var string $UniqueName
   * @access public
   */
  public $UniqueName = null;

  /**
   * 
   * @var DocumentMapNode[] $Children
   * @access public
   */
  public $Children = null;

  /**
   * 
   * @param string $Label
   * @param string $UniqueName
   * @param DocumentMapNode[] $Children
   * @access public
   */
  public function __construct($Label = null, $UniqueName = null, $Children = null)
  {
    $this->Label = $Label;
    $this->UniqueName = $UniqueName;
    $this->Children = $Children;
  }

}
