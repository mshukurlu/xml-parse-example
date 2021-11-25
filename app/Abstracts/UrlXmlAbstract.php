<?php


namespace App\Abstracts;


use App\Interfaces\GetXmlFromUrl;

abstract class UrlXmlAbstract implements GetXmlFromUrl
{
    private $url;
    public function setXmlUrl($url){
        $this->url=$url;
    }
    public function getXmlUrl()
    {
        return $this->url;
    }

    public function callSoapApi(){
     $request = new \SoapClient($this->getXmlUrl());
     return $request;
    }


    abstract public function getResult();
}
