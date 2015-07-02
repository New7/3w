<?php
/**
 * TOP API: taobao.top.tim.apiname.get request
 * 
 * @author auto create
 * @since 1.0, 2015.02.09
 */
class TopTimApinameGetRequest
{
	/** 
	 * apiid
	 **/
	private $apiId;
	
	private $apiParas = array();
	
	public function setApiId($apiId)
	{
		$this->apiId = $apiId;
		$this->apiParas["api_id"] = $apiId;
	}

	public function getApiId()
	{
		return $this->apiId;
	}

	public function getApiMethodName()
	{
		return "taobao.top.tim.apiname.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->apiId,"apiId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
