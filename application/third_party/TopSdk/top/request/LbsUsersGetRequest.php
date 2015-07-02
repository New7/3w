<?php
/**
 * TOP API: taobao.lbs.users.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class LbsUsersGetRequest
{
	/** 
	 * 地址信息
	 **/
	private $address;
	
	/** 
	 * 距离指定地址的距离，单位为米，最多支持小数点后两位。
	 **/
	private $distance;
	
	/** 
	 * 一次返回匹配会员的数量，最大支持一次返回1万个会员
	 **/
	private $quantity;
	
	private $apiParas = array();
	
	public function setAddress($address)
	{
		$this->address = $address;
		$this->apiParas["address"] = $address;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setDistance($distance)
	{
		$this->distance = $distance;
		$this->apiParas["distance"] = $distance;
	}

	public function getDistance()
	{
		return $this->distance;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function getApiMethodName()
	{
		return "taobao.lbs.users.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->distance,"distance");
		RequestCheckUtil::checkMaxValue($this->quantity,10000,"quantity");
		RequestCheckUtil::checkMinValue($this->quantity,1,"quantity");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
