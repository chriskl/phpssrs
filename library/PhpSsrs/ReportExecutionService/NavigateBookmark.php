<?php

namespace PhpSsrs\ReportExecutionService;

class NavigateBookmark
{

  /**
   * 
   * @var string $BookmarkID
   * @access public
   */
  public $BookmarkID = null;

  /**
   * 
   * @param string $BookmarkID
   * @access public
   */
  public function __construct($BookmarkID = null)
  {
    $this->BookmarkID = $BookmarkID;
  }

}
