<?php
/**
 * TOP API: taobao.top.apicharge.userinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2015.01.19
 */
class TopApichargeUserinfoGetRequest
{
	/** 
	 * 设置需要的返回字段，可供选择的有curr_month_amout,yestoday_amout,account_amout
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
		return "taobao.top.apicharge.userinfo.get";
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
