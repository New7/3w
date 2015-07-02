<?php
/**
 * TOP API: taobao.user.gaode.get request
 * 
 * @author auto create
 * @since 1.0, 2014.09.04
 */
class UserGaodeGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.user.gaode.get";
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
