<?php

namespace Jos\Request;

use Jos\RequestCheckUtil;

class KuaicheZnPlanSearchKeywordGetRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.kuaiche.zn.plan.search.keyword.get";
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

    private $planId;

    public function setPlanId($planId)
    {
        $this->planId              = $planId;
        $this->apiParas["plan_id"] = $planId;
    }

    public function getPlanId()
    {
        return $this->planId;
    }

}





        
 

