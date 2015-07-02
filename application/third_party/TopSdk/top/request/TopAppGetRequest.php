<?php
/**
 * TOP API: taobao.top.app.get request
 * 
 * @author auto create
 * @since 1.0, 2012.11.20
 */
class TopAppGetRequest
{
	/** 
	 * 需要获取的字段信息，包括app_key,app_name,call_back_url,monitor_url
如果有多个，以逗号隔开
	 **/
	private $fields;
	
	/** 
	 * TOP开发者的appkey，必须是所传入isv的Session所对应的 appkey
	 **/
	private $isvAppKey;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setIsvAppKey($isvAppKey)
	{
		$this->isvAppKey = $isvAppKey;
		$this->apiParas["isv_app_key"] = $isvAppKey;
	}

	public function getIsvAppKey()
	{
		return $this->isvAppKey;
	}

	public function getApiMethodName()
	{
		return "taobao.top.app.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isvAppKey,"isvAppKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
