<?php
/**
 * TOP API: taobao.jushita.syncrule.set request
 * 
 * @author auto create
 * @since 1.0, 2012.10.25
 */
class JushitaSyncruleSetRequest
{
	/** 
	 * ISV购买的rds数据库的实例名称
	 **/
	private $instanceName;
	
	/** 
	 * userNicks为传入的用户昵称字符串，多个用户可以使用','进行分隔，一次最大支持20个
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
		return "taobao.jushita.syncrule.set";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->instanceName,"instanceName");
		RequestCheckUtil::checkNotNull($this->userNicks,"userNicks");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
