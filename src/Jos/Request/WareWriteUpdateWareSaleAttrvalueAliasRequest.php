<?php

namespace Jos\Request;

use Jos\RequestCheckUtil;

class WareWriteUpdateWareSaleAttrvalueAliasRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ware.write.updateWareSaleAttrvalueAlias";
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

    private $wareId;

    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"] = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    private $props;

    public function setProps($props)
    {
        foreach ($props as $key => $value) {
            $props[$key]['@type'] = 'com.jd.pop.ware.ic.api.domain.Prop';
        }
        $this->props             = $props;
        $this->apiParas["props"] = $props;
    }

    public function getProps()
    {
        return $this->props;
    }

    private $field;

    public function setField($field)
    {
        $this->field             = $field;
        $this->apiParas["field"] = $field;
    }

    public function getField()
    {
        return $this->field;
    }

}





        
 

