<?php

namespace Jos\Request;

use Jos\RequestCheckUtil;

class GetFactoryAbutmentCancelInfoRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.getFactoryAbutmentCancelInfo";
    }

    public function getApiParas()
    {
        return json_encode($this->apiParas);
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }

    private $authorizedSequence;

    public function setAuthorizedSequence($authorizedSequence)
    {
        $this->authorizedSequence             = $authorizedSequence;
        $this->apiParas["authorizedSequence"] = $authorizedSequence;
    }

    public function getAuthorizedSequence()
    {
        return $this->authorizedSequence;
    }

}





        
 

