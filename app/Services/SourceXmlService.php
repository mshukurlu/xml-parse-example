<?php

namespace App\Services;

use App\Abstracts\SourceXmlAbstract;


class SourceXmlService  extends SourceXmlAbstract
{

    public function __construct($source)
    {
        $this->setXmlSource($source);
    }

    private function sumAllBetAmount(){

        $getBetInfo = XmlParseService::getBetInfoProperty($this->getLoadedSource());
        $sum = 0;

        foreach ($getBetInfo->BetAmount as $item){
                    $sum+=$item;
        }

        return $sum;
    }

    public function getResult()
    {
        return $this->sumAllBetAmount();
    }
}
