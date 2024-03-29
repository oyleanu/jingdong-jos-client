<?php

namespace Jos\Request;

use Jos\RequestCheckUtil;

class DspMaterialDelMaterialByIdRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.material.delMaterialById";
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

    private $materialId;

    public function setMaterialId($materialId)
    {
        $this->materialId             = $materialId;
        $this->apiParas["materialId"] = $materialId;
    }

    public function getMaterialId()
    {
        return $this->materialId;
    }

}





        
 

