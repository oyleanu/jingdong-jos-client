<?php

namespace Jos\Request;

use Jos\RequestCheckUtil;

class SellerPromotionResumeRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.resume";
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

    private $promoId;

    public function setPromoId($promoId)
    {
        $this->promoId              = $promoId;
        $this->apiParas["promo_id"] = $promoId;
    }

    public function getPromoId()
    {
        return $this->promoId;
    }

}





        
 

