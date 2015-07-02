<?php
/**
 * TOP API: taobao.jshita.jms.user.get request
 * 
 * @author auto create
 * @since 1.0, 2015.06.09
 */
class JshitaJmsUserGetRequest
{
	/** 
	 * 需要查询的用户名
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "taobao.jshita.jms.user.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userNick,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
