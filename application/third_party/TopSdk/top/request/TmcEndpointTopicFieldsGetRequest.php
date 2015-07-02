<?php
/**
 * TOP API: taobao.tmc.endpoint.topic.fields.get request
 * 
 * @author auto create
 * @since 1.0, 2013.05.15
 */
class TmcEndpointTopicFieldsGetRequest
{
	/** 
	 * 发起API请求的Endpoint ID
	 **/
	private $localId;
	
	/** 
	 * topic名称
	 **/
	private $topicName;
	
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

	public function setTopicName($topicName)
	{
		$this->topicName = $topicName;
		$this->apiParas["topic_name"] = $topicName;
	}

	public function getTopicName()
	{
		return $this->topicName;
	}

	public function getApiMethodName()
	{
		return "taobao.tmc.endpoint.topic.fields.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->localId,"localId");
		RequestCheckUtil::checkNotNull($this->topicName,"topicName");
		RequestCheckUtil::checkMaxLength($this->topicName,1024,"topicName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
