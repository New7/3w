<?php
/**
 * TOP API: taobao.user.identity.get request
 * 
 * @author auto create
 * @since 1.0, 2014.12.23
 */
class UserIdentityGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.user.identity.get";
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
