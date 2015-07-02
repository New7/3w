<?php
/**
 * TOP API: alipay.xiaodai.user.get request
 * 
 * @author auto create
 * @since 1.0, 2015.05.26
 */
class AlipayXiaodaiUserGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alipay.xiaodai.user.get";
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
