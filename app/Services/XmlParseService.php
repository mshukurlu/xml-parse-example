<?php


namespace App\Services;


use DOMDocument;

class XmlParseService
{
    public static function getBetInfoProperty($source){

            $element = simplexml_load_string($source);

        var_dump(array_sum((array)$element->Param->BetInfo->BetAmount)); exit();
      
    }
}
