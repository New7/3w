<?php
/**
 * TOP API: taobao.user.tradestate.get request
 * 
 * @author auto create
 * @since 1.0, 2014.09.04
 */
class UserTradestateGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.user.tradestate.get";
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
