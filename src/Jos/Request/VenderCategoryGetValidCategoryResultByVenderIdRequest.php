<?php
namespace Jos\Request;

use Jos\RequestCheckUtil;

class VenderCategoryGetValidCategoryResultByVenderIdRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vender.category.getValidCategoryResultByVenderId";
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
                                    	}





        
 
