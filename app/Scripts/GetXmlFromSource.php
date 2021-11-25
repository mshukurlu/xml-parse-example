<?php

namespace App\Scripts;

use App\Services\SourceXmlService;

class GetXmlFromSource extends SourceXmlService
{
    protected $sourceService;

    public function __construct()
    {
        $this->sourceService = new SourceXmlService();
    }

    public function Run()
    {
        $this->sourceService->setXmlSource('../file');

        echo $this->sourceService->getResult();
    }
}

(new GetXmlFromSource())->Run();
