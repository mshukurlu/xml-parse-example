<?php


namespace App\Services;


class XmlParseService
{
    public static function getBetInfoProperty($source){

       $element = simplexml_load_string($source);

       return $element->Param->BetInfo;
    }
}
