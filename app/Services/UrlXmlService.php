<?php
namespace App\Services;

use App\Abstracts\UrlXmlAbstract;

class  UrlXmlService extends  UrlXmlAbstract{
    public function __construct($url)
    {
        $this->setXmlUrl($url);
    }

    private function getPeopleViaApi($data)
    {
        $request =  $this->callSoapApi();

        $xmlResponse = $request->GetByName($data)->GetByNameResult->any;

        return simplexml_load_string($xmlResponse)->ListByName->SQL;
    }

    private function findPeopleStartWith($value='a')
    {
        return $this->getPeopleViaApi(array('name'=>$value));
    }
    public function getResult()
    {
        foreach($this->findPeopleStartWith() as $item){
            #this is a demonstration I can display all the information even with HTML :)
            echo $item->Name.' --- ';
        }
    }
}
