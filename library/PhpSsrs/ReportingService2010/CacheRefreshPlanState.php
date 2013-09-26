<?php

namespace PhpSsrs\ReportingService2010;

class CacheRefreshPlanState
{

  /**
   * 
   * @var boolean $MissingParameterValue
   * @access public
   */
  public $MissingParameterValue = null;

  /**
   * 
   * @var boolean $InvalidParameterValue
   * @access public
   */
  public $InvalidParameterValue = null;

  /**
   * 
   * @var boolean $UnknownItemParameter
   * @access public
   */
  public $UnknownItemParameter = null;

  /**
   * 
   * @var boolean $CachingNotEnabledOnItem
   * @access public
   */
  public $CachingNotEnabledOnItem = null;

  /**
   * 
   * @param boolean $MissingParameterValue
   * @param boolean $InvalidParameterValue
   * @param boolean $UnknownItemParameter
   * @param boolean $CachingNotEnabledOnItem
   * @access public
   */
  public function __construct($MissingParameterValue, $InvalidParameterValue, $UnknownItemParameter, $CachingNotEnabledOnItem)
  {
    $this->MissingParameterValue = $MissingParameterValue;
    $this->InvalidParameterValue = $InvalidParameterValue;
    $this->UnknownItemParameter = $UnknownItemParameter;
    $this->CachingNotEnabledOnItem = $CachingNotEnabledOnItem;
  }

}
