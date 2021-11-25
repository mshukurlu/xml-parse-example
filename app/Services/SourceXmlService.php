<?php

namespace App\Services;

use App\Abstracts\SourceXmlAbstract;

class SourceXmlService  extends SourceXmlAbstract
{
    public function sumAllBetAmount(){

        $childNodes = DomDocumentService::getChildNodesFromXml($this->xmlSource);
        $sum = 0;
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
