<?php

namespace PhpSsrs\ReportService2010;

class ListDatabaseCredentialRetrievalOptionsResponse
{

  /**
   * 
   * @var String1[] $ListDatabaseCredentialRetrievalOptionsResult
   * @access public
   */
  public $ListDatabaseCredentialRetrievalOptionsResult = null;

  /**
   * 
   * @param String1[] $ListDatabaseCredentialRetrievalOptionsResult
   * @access public
   */
  public function __construct($ListDatabaseCredentialRetrievalOptionsResult)
  {
    $this->ListDatabaseCredentialRetrievalOptionsResult = $ListDatabaseCredentialRetrievalOptionsResult;
  }

}
