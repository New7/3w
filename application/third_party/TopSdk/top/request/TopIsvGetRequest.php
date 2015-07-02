<?php
/**
 * TOP API: taobao.top.isv.get request
 * 
 * @author auto create
 * @since 1.0, 2012.03.30
 */
class TopIsvGetRequest
{
	/** 
	 * 需要获取的字段信息，包括isv_id,isv_name,phone,email,address,type,company,appkeys
如果有多个，以逗号隔开
	 **/
	private $fields;
	
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

	public function getApiMethodName()
	{
		return "taobao.top.isv.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
