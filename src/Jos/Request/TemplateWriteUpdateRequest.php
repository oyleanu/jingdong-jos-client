<?php

namespace Jos\Request;

use Jos\RequestCheckUtil;

class TemplateWriteUpdateRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.template.write.update";
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

    private $bottomContent;

    public function setBottomContent($bottomContent)
    {
        $this->bottomContent             = $bottomContent;
        $this->apiParas["bottomContent"] = $bottomContent;
    }

    public function getBottomContent()
    {
        return $this->bottomContent;
    }

    private $headContent;

    public function setHeadContent($headContent)
    {
        $this->headContent             = $headContent;
        $this->apiParas["headContent"] = $headContent;
    }

    public function getHeadContent()
    {
        return $this->headContent;
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

    private $name;

    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"] = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    private $mobileBottomContent;

    public function setMobileBottomContent($mobileBottomContent)
    {
        $this->mobileBottomContent             = $mobileBottomContent;
        $this->apiParas["mobileBottomContent"] = $mobileBottomContent;
    }

    public function getMobileBottomContent()
    {
        return $this->mobileBottomContent;
    }

    private $mobileHeadContent;

    public function setMobileHeadContent($mobileHeadContent)
    {
        $this->mobileHeadContent             = $mobileHeadContent;
        $this->apiParas["mobileHeadContent"] = $mobileHeadContent;
    }

    public function getMobileHeadContent()
    {
        return $this->mobileHeadContent;
    }

}





        
 

