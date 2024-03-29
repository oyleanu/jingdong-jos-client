<?php

namespace Jos\Request;

use Jos\RequestCheckUtil;

class JwPurchaseTrackQueryTrackRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jw.purchase.track.queryTrack";
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

    private $orderCode;

    public function setOrderCode($orderCode)
    {
        $this->orderCode             = $orderCode;
        $this->apiParas["orderCode"] = $orderCode;
    }

    public function getOrderCode()
    {
        return $this->orderCode;
    }

}





        
 

