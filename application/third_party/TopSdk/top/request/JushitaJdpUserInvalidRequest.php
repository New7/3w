<?php
/**
 * TOP API: taobao.jushita.jdp.user.invalid request
 * 
 * @author auto create
 * @since 1.0, 2013.01.31
 */
class JushitaJdpUserInvalidRequest
{
	/** 
	 * 用户编号
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.jushita.jdp.user.invalid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
