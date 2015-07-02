<?php
/**
 * TOP API: taobao.tmc.endpoint.token.check request
 * 
 * @author auto create
 * @since 1.0, 2013.05.15
 */
class TmcEndpointTokenCheckRequest
{
	/** 
	 * 发起API请求的Endpoint ID
	 **/
	private $localId;
	
	/** 
	 * 链接建立方的 Endpoint ID
	 **/
	private $remoteId;
	
	/** 
	 * 链接发起方传过来的Token 监听方需要校验
	 **/
	private $token;
	
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

	public function setRemoteId($remoteId)
	{
		$this->remoteId = $remoteId;
		$this->apiParas["remote_id"] = $remoteId;
	}

	public function getRemoteId()
	{
		return $this->remoteId;
	}

	public function setToken($token)
	{
		$this->token = $token;
		$this->apiParas["token"] = $token;
	}

	public function getToken()
	{
		return $this->token;
	}

	public function getApiMethodName()
	{
		return "taobao.tmc.endpoint.token.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->localId,"localId");
		RequestCheckUtil::checkNotNull($this->remoteId,"remoteId");
		RequestCheckUtil::checkNotNull($this->token,"token");
		RequestCheckUtil::checkMaxLength($this->token,10,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
