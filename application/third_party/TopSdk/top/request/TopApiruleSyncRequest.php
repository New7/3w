<?php
/**
 * TOP API: taobao.top.apirule.sync request
 * 
 * @author auto create
 * @since 1.0, 2012.06.28
 */
class TopApiruleSyncRequest
{
	/** 
	 * 已发布的api名称。
	 **/
	private $apiName;
	
	private $apiParas = array();
	
	public function setApiName($apiName)
	{
		$this->apiName = $apiName;
		$this->apiParas["api_name"] = $apiName;
	}

	public function getApiName()
	{
		return $this->apiName;
	}

	public function getApiMethodName()
	{
		return "taobao.top.apirule.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->apiName,"apiName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
