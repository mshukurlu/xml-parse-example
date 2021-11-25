<?php

namespace App\Scripts;
const currentDir = __DIR__;
include currentDir.'/../../'.'start.php';

use App\Abstracts\ScriptRunner;
use App\Services\SourceXmlService;

class GetXmlFromSource extends ScriptRunner
{
    protected $sourceService;

    public function __construct()
    {
        $this->sourceService = new SourceXmlService();
    }

    public function Run()
    {
        $this->sourceService->setXmlSource( __DIR__.'/../../source/example.xml');

        echo $this->sourceService->getResult();
    }
}

(new GetXmlFromSource())->Run();
