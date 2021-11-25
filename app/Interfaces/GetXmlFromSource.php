<?php


namespace App\Interfaces;


interface GetXmlFromSource extends XmlParser
{
    public function setXmlSource($source);
    public function getLoadedSource();
}
