<?php

namespace Jos\Request;

use Jos\RequestCheckUtil;

class SendFactoryAbutmentReceiveInfoRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.sendFactoryAbutmentReceiveInfo";
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

    private $serviceType;

    public function setServiceType($serviceType)
    {
        $this->serviceType             = $serviceType;
        $this->apiParas["serviceType"] = $serviceType;
    }

    public function getServiceType()
    {
        return $this->serviceType;
    }

    private $orderno;

    public function setOrderno($orderno)
    {
        $this->orderno             = $orderno;
        $this->apiParas["orderno"] = $orderno;
    }

    public function getOrderno()
    {
        return $this->orderno;
    }

    private $disposeTime;

    public function setDisposeTime($disposeTime)
    {
        $this->disposeTime             = $disposeTime;
        $this->apiParas["disposeTime"] = $disposeTime;
    }

    public function getDisposeTime()
    {
        return $this->disposeTime;
    }

    private $disposeResult;

    public function setDisposeResult($disposeResult)
    {
        $this->disposeResult             = $disposeResult;
        $this->apiParas["disposeResult"] = $disposeResult;
    }

    public function getDisposeResult()
    {
        return $this->disposeResult;
    }

    private $remark;

    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["remark"] = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

}





        
 

