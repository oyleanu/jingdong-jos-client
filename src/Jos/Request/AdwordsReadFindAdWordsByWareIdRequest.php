<?php

namespace Jos\Request;

use Jos\RequestCheckUtil;

class AdwordsReadFindAdWordsByWareIdRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.adwords.read.findAdWordsByWareId";
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

    private $wareId;

    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"] = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

}





        
 

