<?php
/**
 * TOP API: taobao.jshita.jms.user.delete request
 * 
 * @author auto create
 * @since 1.0, 2015.06.09
 */
class JshitaJmsUserDeleteRequest
{
	/** 
	 * 需要停止同步消息的用户nick
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
		return "taobao.jshita.jms.user.delete";
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
