<?php

namespace App\Scripts;

use App\Abstracts\ScriptRunner;
use App\Services\UrlXmlService;

const currentDir = __DIR__;
include currentDir . '/../../' . 'start.php';


class GetXmlFromUrl extends ScriptRunner
{
    protected $soapService;
    public function __construct()
    {
        $this->soapService = new UrlXmlService('https://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL');
    }

    public function Run()
    {
       $this->soapService->getResult();
    }
}


(new GetXmlFromUrl())->Run();
