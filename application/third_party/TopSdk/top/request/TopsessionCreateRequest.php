<?php
/**
 * TOP API: taobao.topsession.create request
 * 
 * @author auto create
 * @since 1.0, 2014.05.04
 */
class TopsessionCreateRequest
{
	/** 
	 * 可信授权终端的IP地址
	 **/
	private $ip;
	
	/** 
	 * 可信服务端的平台参数
	 **/
	private $platform;
	
	/** 
	 * 授权对象的AppKey
	 **/
	private $targetAppkey;
	
	/** 
	 * 授权用户的名称
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setIp($ip)
	{
		$this->ip = $ip;
		$this->apiParas["ip"] = $ip;
	}

	public function getIp()
	{
		return $this->ip;
	}

	public function setPlatform($platform)
	{
		$this->platform = $platform;
		$this->apiParas["platform"] = $platform;
	}

	public function getPlatform()
	{
		return $this->platform;
	}

	public function setTargetAppkey($targetAppkey)
	{
		$this->targetAppkey = $targetAppkey;
		$this->apiParas["target_appkey"] = $targetAppkey;
	}

	public function getTargetAppkey()
	{
		return $this->targetAppkey;
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
		return "taobao.topsession.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ip,"ip");
		RequestCheckUtil::checkNotNull($this->platform,"platform");
		RequestCheckUtil::checkNotNull($this->targetAppkey,"targetAppkey");
		RequestCheckUtil::checkNotNull($this->userNick,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
