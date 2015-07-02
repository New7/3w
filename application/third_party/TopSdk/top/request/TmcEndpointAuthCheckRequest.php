<?php
/**
 * TOP API: taobao.tmc.endpoint.auth.check request
 * 
 * @author auto create
 * @since 1.0, 2013.05.15
 */
class TmcEndpointAuthCheckRequest
{
	/** 
	 * 发起API的Endpoint ID
	 **/
	private $localId;
	
	/** 
	 * 消息接收方的appkey
	 **/
	private $remoteAppkey;
	
	/** 
	 * 发送消息的用户名称
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setLocalId($localId)
	{
		$this->localId = $localId;
		$this->apiParas["local_id"] = $localId;
	}

	public function getLocalId()
	{
		return $this->localId;
	}

	public function setRemoteAppkey($remoteAppkey)
	{
		$this->remoteAppkey = $remoteAppkey;
		$this->apiParas["remote_appkey"] = $remoteAppkey;
	}

	public function getRemoteAppkey()
	{
		return $this->remoteAppkey;
	}

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
		return "taobao.tmc.endpoint.auth.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->localId,"localId");
		RequestCheckUtil::checkMinValue($this->localId,1,"localId");
		RequestCheckUtil::checkNotNull($this->remoteAppkey,"remoteAppkey");
		RequestCheckUtil::checkMaxLength($this->remoteAppkey,256,"remoteAppkey");
		RequestCheckUtil::checkNotNull($this->userNick,"userNick");
		RequestCheckUtil::checkMaxLength($this->userNick,256,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
