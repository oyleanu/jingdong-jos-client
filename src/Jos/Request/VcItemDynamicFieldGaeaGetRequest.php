<?php

namespace Jos\Request;

use Jos\RequestCheckUtil;

class VcItemDynamicFieldGaeaGetRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.dynamicFieldGaea.get";
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

    private $cid3;

    public function setCid3($cid3)
    {
        $this->cid3             = $cid3;
        $this->apiParas["cid3"] = $cid3;
    }

    public function getCid3()
    {
        return $this->cid3;
    }

}





        
 

