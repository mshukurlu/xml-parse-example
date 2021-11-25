<?php


namespace App\Abstracts;


use App\Interfaces\GetXmlFromSource;

abstract  class SourceXmlAbstract implements GetXmlFromSource
{
    protected $xmlSource = null;
    public function setXmlSource($source)
    {

        if(file_exists($source)){
            //read the file and bind its content
            $this->xmlSource = file_get_contents($source);
        }else {
            throw new \Exception('File not found!');
        }
    }

    public function getLoadedSource()
    {
        return $this->xmlSource;
    }

   abstract public function getResult();
}
