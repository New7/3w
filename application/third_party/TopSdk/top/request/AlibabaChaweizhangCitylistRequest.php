<?php
/**
 * TOP API: alibaba.chaweizhang.citylist request
 * 
 * @author auto create
 * @since 1.0, 2015.04.20
 */
class AlibabaChaweizhangCitylistRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.chaweizhang.citylist";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
