<?php

namespace Jos\Request;

use Jos\RequestCheckUtil;

class EdiPoDetailGetRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.edi.po.detail.get";
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

    private $purchaseOrderCode;

    public function setPurchaseOrderCode($purchaseOrderCode)
    {
        $this->purchaseOrderCode             = $purchaseOrderCode;
        $this->apiParas["purchaseOrderCode"] = $purchaseOrderCode;
    }

    public function getPurchaseOrderCode()
    {
        return $this->purchaseOrderCode;
    }

}





        
 

