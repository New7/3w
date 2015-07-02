<?php
/**
 * TOP API: taobao.daxue.time.get request
 * 
 * @author auto create
 * @since 1.0, 2014.09.04
 */
class DaxueTimeGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.daxue.time.get";
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
