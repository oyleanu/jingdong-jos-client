<?php

namespace Jos\Request;

use Jos\RequestCheckUtil;

class DspAdunitAdoptimizeUpdateRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adunit.adoptimize.update";
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

    private $id;

    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"] = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    private $adOptimize;

    public function setAdOptimize($adOptimize)
    {
        $this->adOptimize             = $adOptimize;
        $this->apiParas["adOptimize"] = $adOptimize;
    }

    public function getAdOptimize()
    {
        return $this->adOptimize;
    }

}





        
 

