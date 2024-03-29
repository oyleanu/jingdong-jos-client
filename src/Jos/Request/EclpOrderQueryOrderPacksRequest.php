<?php

namespace Jos\Request;

use Jos\RequestCheckUtil;

class EclpOrderQueryOrderPacksRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.queryOrderPacks";
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

    private $eclpSoNo;

    public function setEclpSoNo($eclpSoNo)
    {
        $this->eclpSoNo             = $eclpSoNo;
        $this->apiParas["eclpSoNo"] = $eclpSoNo;
    }

    public function getEclpSoNo()
    {
        return $this->eclpSoNo;
    }
}





        
 

