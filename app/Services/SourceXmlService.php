<?php

namespace App\Services;

use App\Abstracts\SourceXmlAbstract;


class SourceXmlService  extends SourceXmlAbstract
{

    public function __construct($source)
    {
        $this->setXmlSource($source);
    }

    public function sumAllBetAmount(){

        $getBetInfo = XmlParseService::getBetInfoProperty($this->getLoadedSource());
        $sum = 0;

      //  array_sum(array_column($getBetInfo,'BetAmount'));

        foreach ($getBetInfo->BetAmount as $item){
                    $sum+=$item;
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
