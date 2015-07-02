<?php
/**
 * TOP API: taobao.lbs.user.distance.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.23
 */
class LbsUserDistanceGetRequest
{
	/** 
	 * 目标地址信息
	 **/
	private $destAddress;
	
	/** 
	 * 用户手机号码，如果这个手机号码匹配到当前商家的会员信息，则优先用会员在淘宝天猫的购物常用收货地址来计算距离。
	 **/
	private $phoneNumber;
	
	/** 
	 * 用户地址信息
	 **/
	private $userAddress;
	
	private $apiParas = array();
	
	public function setDestAddress($destAddress)
	{
		$this->destAddress = $destAddress;
		$this->apiParas["dest_address"] = $destAddress;
	}

	public function getDestAddress()
	{
		return $this->destAddress;
	}

	public function setPhoneNumber($phoneNumber)
	{
		$this->phoneNumber = $phoneNumber;
		$this->apiParas["phone_number"] = $phoneNumber;
	}

	public function getPhoneNumber()
	{
		return $this->phoneNumber;
	}

	public function setUserAddress($userAddress)
	{
		$this->userAddress = $userAddress;
		$this->apiParas["user_address"] = $userAddress;
	}

	public function getUserAddress()
	{
		return $this->userAddress;
	}

	public function getApiMethodName()
	{
		return "taobao.lbs.user.distance.get";
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
