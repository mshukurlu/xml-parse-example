<?php

namespace App\Services;

use App\Abstracts\SourceXmlAbstract;


class SourceXmlService  extends SourceXmlAbstract
{
    public function sumAllBetAmount(){

        $childNodes = XmlParseService::getBetInfoProperty($this->xmlSource);
        $sum = 0;
        var_dump($childNodes); exit();
        foreach ($childNodes as $item){
                if($item->nodeName==$this->getSumColumnName()){
                    $sum+=$item->nodeValue;
                }
        }

        return $sum;
    }

    public function getResult()
    {
        return $this->sumAllBetAmount();
    }

    public function getSumColumnName(){
        //Mey be we configure this by config file
        return 'betAmount';
    }
}
