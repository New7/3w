<?php
/**
 * TOP API: taobao.tmc.endpoint.init request
 * 
 * @author auto create
 * @since 1.0, 2013.05.15
 */
class TmcEndpointInitRequest
{
	/** 
	 * endpoint 所属app的appkey
	 **/
	private $appkey;
	
	/** 
	 * endpoint所在域，公网domain：www
	 **/
	private $domain;
	
	/** 
	 * endpoint有效时间，为空时，默认当前时间加半小时。
	 **/
	private $expiryDate;
	
	/** 
	 * endpoint的uri
	 **/
	private $uri;
	
	/** 
	 * 根据用户nick的路由规则，当前endpoint服务哪些用户
	 **/
	private $userNicks;
	
	private $apiParas = array();
	
	public function setAppkey($appkey)
	{
		$this->appkey = $appkey;
		$this->apiParas["appkey"] = $appkey;
	}

	public function getAppkey()
	{
		return $this->appkey;
	}

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
		return "taobao.tmc.endpoint.init";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appkey,"appkey");
		RequestCheckUtil::checkMaxLength($this->appkey,256,"appkey");
		RequestCheckUtil::checkNotNull($this->domain,"domain");
		RequestCheckUtil::checkMaxLength($this->domain,1024,"domain");
		RequestCheckUtil::checkNotNull($this->uri,"uri");
		RequestCheckUtil::checkMaxLength($this->uri,1024,"uri");
		RequestCheckUtil::checkMaxLength($this->userNicks,2048,"userNicks");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
