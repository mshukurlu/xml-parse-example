<?php


namespace App\Abstracts;


use App\Interfaces\GetXmlFromSource;

abstract  class SourceXmlAbstract implements GetXmlFromSource
{
    protected $source = null;
    protected function setXmlSource($source)
    {
       $this->source = file_get_contents($source);
    }

    public function getLoadedSource()
    {
        return $this->source;
    }

   abstract public function getResult();
}
