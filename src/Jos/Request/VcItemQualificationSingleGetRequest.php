<?php

namespace Jos\Request;

use Jos\RequestCheckUtil;

class VcItemQualificationSingleGetRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc.item.qualification.single.get";
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

    private $applyId;

    public function setApplyId($applyId)
    {
        $this->applyId              = $applyId;
        $this->apiParas["apply_id"] = $applyId;
    }

    public function getApplyId()
    {
        return $this->applyId;
    }

}





        
 

