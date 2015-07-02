<?php
/**
 * TOP API: taobao.tmc.endpoint.update request
 * 
 * @author auto create
 * @since 1.0, 2013.05.15
 */
class TmcEndpointUpdateRequest
{
	/** 
	 * Endpoint所在域，公网ip：www
	 **/
	private $domain;
	
	/** 
	 * Endpoint有效时间，不传则为当前时间加半小时
	 **/
	private $expiryDate;
	
	/** 
	 * Endpoint ID
	 **/
	private $localId;
	
	/** 
	 * Endpoint uri
	 **/
	private $uri;
	
	/** 
	 * Endpoint服务的用户nick，路由规则
	 **/
	private $userNicks;
	
	private $apiParas = array();
	
	public function setDomain($domain)
	{
		$this->domain = $domain;
		$this->apiParas["domain"] = $domain;
	}

	public function getDomain()
	{
		return $this->domain;
	}

	public function setExpiryDate($expiryDate)
	{
		$this->expiryDate = $expiryDate;
		$this->apiParas["expiry_date"] = $expiryDate;
	}

	public function getExpiryDate()
	{
		return $this->expiryDate;
	}

	public function setLocalId($localId)
	{
		$this->localId = $localId;
		$this->apiParas["local_id"] = $localId;
	}

	public function getLocalId()
	{
		return $this->localId;
	}

	public function setUri($uri)
	{
		$this->uri = $uri;
		$this->apiParas["uri"] = $uri;
	}

	public function getUri()
	{
		return $this->uri;
	}

	public function setUserNicks($userNicks)
	{
		$this->userNicks = $userNicks;
		$this->apiParas["user_nicks"] = $userNicks;
	}

	public function getUserNicks()
	{
		return $this->userNicks;
	}

	public function getApiMethodName()
	{
		return "taobao.tmc.endpoint.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->domain,"domain");
		RequestCheckUtil::checkMaxLength($this->domain,1024,"domain");
		RequestCheckUtil::checkNotNull($this->localId,"localId");
		RequestCheckUtil::checkMinValue($this->localId,1,"localId");
		RequestCheckUtil::checkNotNull($this->uri,"uri");
		RequestCheckUtil::checkMaxLength($this->uri,1024,"uri");
		RequestCheckUtil::checkMaxLength($this->userNicks,2048,"userNicks");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
