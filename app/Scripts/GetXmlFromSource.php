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
      $this->sourceService = new SourceXmlService(__DIR__.'/../../source/example.xml');
    }

    public function Run()
    {
        echo $this->sourceService->getResult();
    }
}

(new GetXmlFromSource())->Run();
