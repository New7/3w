<?php
/**
 * TOP API: taobao.users.zhongxin.get request
 * 
 * @author auto create
 * @since 1.0, 2015.06.08
 */
class UsersZhongxinGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.users.zhongxin.get";
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
