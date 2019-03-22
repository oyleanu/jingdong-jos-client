<?php
namespace Jos\Request;

use Jos\RequestCheckUtil;

class WareWriteAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.write.add";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
                                                        		                                    	                    private $ware;
	public function setWare($ware){
		$this->ware = $ware;
         $this->apiParas["ware"] = $ware;
	}

	public function getWare(){
	    return $this->ware;
    }

    private $skus;
    public function setSkus($skus){
        $this->skus = $skus;
        $this->apiParas["skus"] = $skus;
    }

    public function getSkus(){
        return $this->skus;
    }

}





        
 

