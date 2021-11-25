<?php


namespace App\Services;


use App\Interfaces\GetXmlFromSource;
use DOMDocument;

class SourceXmlService implements GetXmlFromSource
{
    protected $xmlSource = null;
    public function setXmlSource($source)
    {
       if(!file_exists($source)){
           //read the file and bind its content
           $this->xmlSource = file_get_contents($source);
       }

       throw new \Exception('File not found!');
    }

    public function getXmlFromSource()
    {
       return $this->xmlSource;
    }

    public function getResult()
    {
       return $this->sumAllBetAmount();
    }

    public function sumAllBetAmount(){

        $xmlDoc = new DOMDocument();
        $xmlDoc->load($this->xmlSource);
        $element = $xmlDoc->documentElement;
        $sum = 0;
        foreach ($element->childNodes as $item){
                if($item->nodeName==$this->getSumColmnName()){
                    $sum+=$item->nodeValue;
                }
        }

        return $sum;
    }

    public function getSumColmnName(){
        //Met be we configure this by config file
        return 'betAmount';
    }
}
