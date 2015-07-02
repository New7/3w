<?php
/**
 * TOP API: taobao.tmc.endpoint.token.get request
 * 
 * @author auto create
 * @since 1.0, 2013.05.15
 */
class TmcEndpointTokenGetRequest
{
	/** 
	 * 发起此API请求的Endpoint ID
	 **/
	private $localId;
	
	/** 
	 * 请求建立链接的目标
	 **/
	private $remoteAppkey;
	
	/** 
	 * 链接建立的前提条件是，双方有发布和订阅此topic消息
	 **/
	private $topic;
	
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

	public function setTopic($topic)
	{
		$this->topic = $topic;
		$this->apiParas["topic"] = $topic;
	}

	public function getTopic()
	{
		return $this->topic;
	}

	public function getApiMethodName()
	{
		return "taobao.tmc.endpoint.token.get";
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
		RequestCheckUtil::checkNotNull($this->topic,"topic");
		RequestCheckUtil::checkMaxLength($this->topic,128,"topic");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
