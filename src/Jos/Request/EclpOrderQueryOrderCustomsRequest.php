<?php

namespace Jos\Request;

use Jos\RequestCheckUtil;

class EclpOrderQueryOrderCustomsRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.queryOrderCustoms";
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

    private $deptNo;

    public function setDeptNo($deptNo)
    {
        $this->deptNo             = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    private $orderId;

    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"] = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    private $pageNo;

    public function setPageNo($pageNo)
    {
        $this->pageNo             = $pageNo;
        $this->apiParas["pageNo"] = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    private $pageSize;

    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    private $startTime;

    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["startTime"] = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    private $endTime;

    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"] = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

}





        
 

