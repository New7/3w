<?php
/**
 * TOP API: taobao.shipping.address.add request
 * 
 * @author auto create
 * @since 1.0, 2015.03.21
 */
class ShippingAddressAddRequest
{
	/** 
	 * 设为默认
	 **/
	private $isDefault;
	
	/** 
	 * 街道地址
	 **/
	private $receiverAddress;
	
	/** 
	 * 城市
	 **/
	private $receiverCity;
	
	/** 
	 * 区/县
	 **/
	private $receiverDistrict;
	
	/** 
	 * 手机号码，由11个数字组成
	 **/
	private $receiverMobile;
	
	/** 
	 * 收货人姓名
	 **/
	private $receiverName;
	
	/** 
	 * 电话号码
	 **/
	private $receiverPhone;
	
	/** 
	 * 省份
	 **/
	private $receiverState;
	
	/** 
	 * 邮政编码，由6个数字组成
	 **/
	private $receiverZip;
	
	private $apiParas = array();
	
	public function setIsDefault($isDefault)
	{
		$this->isDefault = $isDefault;
		$this->apiParas["is_default"] = $isDefault;
	}

	public function getIsDefault()
	{
		return $this->isDefault;
	}

	public function setReceiverAddress($receiverAddress)
	{
		$this->receiverAddress = $receiverAddress;
		$this->apiParas["receiver_address"] = $receiverAddress;
	}

	public function getReceiverAddress()
	{
		return $this->receiverAddress;
	}

	public function setReceiverCity($receiverCity)
	{
		$this->receiverCity = $receiverCity;
		$this->apiParas["receiver_city"] = $receiverCity;
	}

	public function getReceiverCity()
	{
		return $this->receiverCity;
	}

	public function setReceiverDistrict($receiverDistrict)
	{
		$this->receiverDistrict = $receiverDistrict;
		$this->apiParas["receiver_district"] = $receiverDistrict;
	}

	public function getReceiverDistrict()
	{
		return $this->receiverDistrict;
	}

	public function setReceiverMobile($receiverMobile)
	{
		$this->receiverMobile = $receiverMobile;
		$this->apiParas["receiver_mobile"] = $receiverMobile;
	}

	public function getReceiverMobile()
	{
		return $this->receiverMobile;
	}

	public function setReceiverName($receiverName)
	{
		$this->receiverName = $receiverName;
		$this->apiParas["receiver_name"] = $receiverName;
	}

	public function getReceiverName()
	{
		return $this->receiverName;
	}

	public function setReceiverPhone($receiverPhone)
	{
		$this->receiverPhone = $receiverPhone;
		$this->apiParas["receiver_phone"] = $receiverPhone;
	}

	public function getReceiverPhone()
	{
		return $this->receiverPhone;
	}

	public function setReceiverState($receiverState)
	{
		$this->receiverState = $receiverState;
		$this->apiParas["receiver_state"] = $receiverState;
	}

	public function getReceiverState()
	{
		return $this->receiverState;
	}

	public function setReceiverZip($receiverZip)
	{
		$this->receiverZip = $receiverZip;
		$this->apiParas["receiver_zip"] = $receiverZip;
	}

	public function getReceiverZip()
	{
		return $this->receiverZip;
	}

	public function getApiMethodName()
	{
		return "taobao.shipping.address.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->receiverAddress,"receiverAddress");
		RequestCheckUtil::checkMaxLength($this->receiverAddress,120,"receiverAddress");
		RequestCheckUtil::checkNotNull($this->receiverCity,"receiverCity");
		RequestCheckUtil::checkMaxLength($this->receiverCity,32,"receiverCity");
		RequestCheckUtil::checkMaxLength($this->receiverDistrict,32,"receiverDistrict");
		RequestCheckUtil::checkMaxLength($this->receiverMobile,11,"receiverMobile");
		RequestCheckUtil::checkNotNull($this->receiverName,"receiverName");
		RequestCheckUtil::checkMaxLength($this->receiverName,30,"receiverName");
		RequestCheckUtil::checkMaxLength($this->receiverPhone,30,"receiverPhone");
		RequestCheckUtil::checkNotNull($this->receiverState,"receiverState");
		RequestCheckUtil::checkMaxLength($this->receiverState,32,"receiverState");
		RequestCheckUtil::checkNotNull($this->receiverZip,"receiverZip");
		RequestCheckUtil::checkMaxLength($this->receiverZip,6,"receiverZip");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
