<?php

namespace PhpSsrs\ReportingService2010;

class ServerInfoHeader
{

  /**
   * 
   * @var string $ReportServerVersionNumber
   * @access public
   */
  public $ReportServerVersionNumber = null;

  /**
   * 
   * @var string $ReportServerEdition
   * @access public
   */
  public $ReportServerEdition = null;

  /**
   * 
   * @var string $ReportServerVersion
   * @access public
   */
  public $ReportServerVersion = null;

  /**
   * 
   * @var string $ReportServerDateTime
   * @access public
   */
  public $ReportServerDateTime = null;

  /**
   * 
   * @var TimeZoneInformation $ReportServerTimeZoneInfo
   * @access public
   */
  public $ReportServerTimeZoneInfo = null;

  /**
   * 
   * @param string $ReportServerVersionNumber
   * @param string $ReportServerEdition
   * @param string $ReportServerVersion
   * @param string $ReportServerDateTime
   * @param TimeZoneInformation $ReportServerTimeZoneInfo
   * @access public
   */
  public function __construct($ReportServerVersionNumber = null, $ReportServerEdition = null, $ReportServerVersion = null, $ReportServerDateTime = null, $ReportServerTimeZoneInfo = null)
  {
    $this->ReportServerVersionNumber = $ReportServerVersionNumber;
    $this->ReportServerEdition = $ReportServerEdition;
    $this->ReportServerVersion = $ReportServerVersion;
    $this->ReportServerDateTime = $ReportServerDateTime;
    $this->ReportServerTimeZoneInfo = $ReportServerTimeZoneInfo;
  }

}
