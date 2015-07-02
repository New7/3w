<?php
/**
 * TOP API: taobao.place.mobile.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.13
 */
class PlaceMobileGetRequest
{
	/** 
	 * 需要查询的手机号码或手机号码前7位
	 **/
	private $phone;
	
	private $apiParas = array();
	
	public function setPhone($phone)
	{
		$this->phone = $phone;
		$this->apiParas["phone"] = $phone;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function getApiMethodName()
	{
		return "taobao.place.mobile.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->phone,"phone");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
