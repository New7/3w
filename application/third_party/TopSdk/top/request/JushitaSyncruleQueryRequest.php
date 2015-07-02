<?php
/**
 * TOP API: taobao.jushita.syncrule.query request
 * 
 * @author auto create
 * @since 1.0, 2012.10.25
 */
class JushitaSyncruleQueryRequest
{
	/** 
	 * ISV购买的rds实例名称
	 **/
	private $instanceName;
	
	/** 
	 * 传入的用户昵称，多个以','分隔,一次传入最大支持500个。
	 **/
	private $userNicks;
	
	private $apiParas = array();
	
	public function setInstanceName($instanceName)
	{
		$this->instanceName = $instanceName;
		$this->apiParas["instance_name"] = $instanceName;
	}

	public function getInstanceName()
	{
		return $this->instanceName;
	}

	public function setUserNicks($userNicks)
	{
		$this->userNicks = $userNicks;
		$this->apiParas["user_nicks"] = $userNicks;
	}

	public function getUserNicks()
	{
		return $this->userNicks;
	}

	public function getApiMethodName()
	{
		return "taobao.jushita.syncrule.query";
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
