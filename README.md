# phpssrs

Concrete SoapClient subclasses to access all four SQL Server Reporting Services endpoints:

* [ReportExecutionService](http://technet.microsoft.com/en-us/library/reportexecution2005.aspx)
* [ReportingService2005](http://technet.microsoft.com/en-us/library/reportservice2005.aspx)
* [ReportingService2006](http://technet.microsoft.com/en-us/library/reportservice2006.aspx)
* [ReportingService20010](http://technet.microsoft.com/en-us/library/reportservice2010.aspx)

See also: [Report Server Web Service Endpoints on TechNet](http://technet.microsoft.com/en-us/library/ms155398.aspx)

## Contributors

Originally developed by Chris Kings-Lynne, https://github.com/chriskl/phpssrs

Pull requests are very welcome, this project is still rapidly being developed for an internal project.

## SSRS Authentication

For this library to work, you MUST enable Basic Authentication on your report server.  You must typically edit
the ```C:\Program Files\Microsoft SQL Server\MSRS10_50\Reporting Services\ReportServer\rsreportserver.config```
file and add the following:

```xml
<AuthenticationTypes>
  <!-- Existing authentication methods here, eg. NTLM, Kerberos -->
  <RSWindowsBasic/>
</AuthenticationTypes>
```

And then restart Reporting Services.

Note that basic authentication will send your password in clear text over the network, so only connect
via SSL, or to safe internal report servers.

## Example Usage

```php
<?php
use \PhpSsrs\ReportingService2010\ReportingService2010;
use \PhpSsrs\ReportingService2010\CreateFolder;

// Replace WSDL URL with your URL, or even better a locally saved version of the file.
$rs = new ReportingService2010([
    'soap_version' => SOAP_1_2,
    'compression' => true,
    'exceptions' => true,
    'cache_wsdl' => WSDL_CACHE_BOTH,
    'keep_alive' => true,
    'features' => SOAP_SINGLE_ELEMENT_ARRAYS & SOAP_USE_XSI_ARRAY_TYPE,
    'login' => 'DOMAIN\\samaccountname',
    'password' => '###########'
], 'http://<ssrs server>/ReportServer/ReportService2010.asmx?wsdl');

$request = new CreateFolder('Test Folder', '/', []);
$response = $this->rs->CreateFolder($request);
```

## Namespaces

The available SOAP clients are:

* ```\PhpSsrs\ReportExecutionService\ReportExecutionService```
* ```\PhpSsrs\ReportingService2005\ReportingService2005```
* ```\PhpSsrs\ReportingService2006\ReportingService2006```
* ```\PhpSsrs\ReportingService2010\ReportingService2010```
