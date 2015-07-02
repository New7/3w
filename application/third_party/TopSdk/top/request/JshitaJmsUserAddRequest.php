<?php
/**
 * TOP API: taobao.jshita.jms.user.add request
 * 
 * @author auto create
 * @since 1.0, 2015.06.09
 */
class JshitaJmsUserAddRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.jshita.jms.user.add";
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
