<?php

namespace PhpSsrs\ReportingService2010;

class DataSourceDefinition
{

  /**
   * 
   * @var string $Extension
   * @access public
   */
  public $Extension = null;

  /**
   * 
   * @var string $ConnectString
   * @access public
   */
  public $ConnectString = null;

  /**
   * 
   * @var boolean $UseOriginalConnectString
   * @access public
   */
  public $UseOriginalConnectString = null;

  /**
   * 
   * @var boolean $OriginalConnectStringExpressionBased
   * @access public
   */
  public $OriginalConnectStringExpressionBased = null;

  /**
   * 
   * @var CredentialRetrievalEnum $CredentialRetrieval
   * @access public
   */
  public $CredentialRetrieval = null;

  /**
   * 
   * @var boolean $WindowsCredentials
   * @access public
   */
  public $WindowsCredentials = null;

  /**
   * 
   * @var boolean $ImpersonateUser
   * @access public
   */
  public $ImpersonateUser = null;

  /**
   * 
   * @var string $Prompt
   * @access public
   */
  public $Prompt = null;

  /**
   * 
   * @var string $UserName
   * @access public
   */
  public $UserName = null;

  /**
   * 
   * @var string $Password
   * @access public
   */
  public $Password = null;

  /**
   * 
   * @var boolean $Enabled
   * @access public
   */
  public $Enabled = null;

  /**
   * 
   * @param string $Extension
   * @param string $ConnectString
   * @param boolean $UseOriginalConnectString
   * @param boolean $OriginalConnectStringExpressionBased
   * @param CredentialRetrievalEnum $CredentialRetrieval
   * @param boolean $WindowsCredentials
   * @param boolean $ImpersonateUser
   * @param string $Prompt
   * @param string $UserName
   * @param string $Password
   * @param boolean $Enabled
   * @access public
   */
  public function __construct($Extension, $ConnectString, $UseOriginalConnectString, $OriginalConnectStringExpressionBased, $CredentialRetrieval, $WindowsCredentials, $ImpersonateUser, $Prompt, $UserName, $Password, $Enabled)
  {
    $this->Extension = $Extension;
    $this->ConnectString = $ConnectString;
    $this->UseOriginalConnectString = $UseOriginalConnectString;
    $this->OriginalConnectStringExpressionBased = $OriginalConnectStringExpressionBased;
    $this->CredentialRetrieval = $CredentialRetrieval;
    $this->WindowsCredentials = $WindowsCredentials;
    $this->ImpersonateUser = $ImpersonateUser;
    $this->Prompt = $Prompt;
    $this->UserName = $UserName;
    $this->Password = $Password;
    $this->Enabled = $Enabled;
  }

}
