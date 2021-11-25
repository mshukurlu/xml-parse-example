<?php


namespace App\Services;


use DOMDocument;

class DomDocumentService
{
    public static function getChildNodesFromXml($source){
        $xmlDoc = new DOMDocument();
        $xmlDoc->load($source);
        $element = $xmlDoc->documentElement;
        return $element->childNodes;
    }
}
