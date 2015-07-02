<?php
/**
 * TOP API: taobao.tmc.follow.delete request
 * 
 * @author auto create
 * @since 1.0, 2014.12.05
 */
class TmcFollowDeleteRequest
{
	/** 
	 * 消息属性字段，必须是消息可被关注的字段。
	 **/
	private $propertyKey;
	
	/** 
	 * 关注的属性值
	 **/
	private $propertyValue;
	
	/** 
	 * 关注的消息名称
	 **/
	private $topic;
	
	private $apiParas = array();
	
	public function setPropertyKey($propertyKey)
	{
		$this->propertyKey = $propertyKey;
		$this->apiParas["property_key"] = $propertyKey;
	}

	public function getPropertyKey()
	{
		return $this->propertyKey;
	}

	public function setPropertyValue($propertyValue)
	{
		$this->propertyValue = $propertyValue;
		$this->apiParas["property_value"] = $propertyValue;
	}

	public function getPropertyValue()
	{
		return $this->propertyValue;
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
		return "taobao.tmc.follow.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->propertyKey,"propertyKey");
		RequestCheckUtil::checkNotNull($this->propertyValue,"propertyValue");
		RequestCheckUtil::checkMaxLength($this->propertyValue,100,"propertyValue");
		RequestCheckUtil::checkNotNull($this->topic,"topic");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
