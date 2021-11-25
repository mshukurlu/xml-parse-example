<?php


namespace App\Interfaces;


interface GetXmlFromUrl extends XmlParser
{
    public function setXmlUrl($url);
    public function getXmlUrl();
}
