<?php
/**
 * TOP API: taobao.increment.xiaoer.subscribe request
 * 
 * @author auto create
 * @since 1.0, 2013.10.30
 */
class IncrementXiaoerSubscribeRequest
{
	/** 
	 * 此字段标记用户对于交易订单的过滤字段。字段格式key1:value1:key1name:value1name;key2:value2:key2name:value2name;……每个标记有4个部分：key(交易中标记的key)，value(交易中标记的value)，keyname(交易消息中标记的key的别名)，valuename(交易消息中标记的value的别名)，4个部分之间以冒号":"连接。不同标记之间以分号";"。连接默认此字段为空，表示不判断交易的标记，是要订阅的都存下来。如果此字段不为空，则根据定义的key和value对交易消息进行过滤。如果一个标记都没有命中，则此交易消息不被保存下来。
	 **/
	private $attributes;
	
	/** 
	 * 标记是否需要清楚attributes中的值。如果不将此位置为true,不传入attributes或者传入空白的attributes不对attributes值进行更新。如果将此位置为true，不管传入什么attributes都将attributes置为空。
	 **/
	private $clearAttributes;
	
	/** 
	 * 订阅的消息中需要主动发送的消息状态。可选值有：商品消息状态、退款消息状态、交易消息状态里面的状态类型。isNotify字段支持多个状态同时订阅。每个大类的状态（商品消息状态里的所有消息状态属于同一个大类，退款消息状态里的所有消息状态属于同一个大类，交易消息状态里的所有消息状态属于同一个大类）要合并到一起传入。每个大类的消息内部用","连接，大类之间用";"连接。另，大类的排列顺序要和topics入参中类型的顺序一一对应，如果不传具体某个大类的消息而传入all，表示订阅这个大类下已开放的所有消息状态，不包括未来开放的消息状态。如：传入了topics="trade;refund;item"时：当传入 status="all;all;all"表示我订阅的三种类型消息下的所有状态的消息都需要主动发送通知；当传入 status="TradeCreate,TradeSuccess;all;ItemDelete"表示我订阅交易类型下的交易创建和交易成功的消息，退款类型下的所有退款相关消息，商品下的商品删除的消息需要主动发送通知。
	 **/
	private $isNotify;
	
	/** 
	 * ISV appKey
	 **/
	private $isvAppKey;
	
	/** 
	 * 消息实时发送的类型：0表示不发送；1表示通过topMQ发送（需要同时传入notify_url）；2表示通过topComet发送；3表示两种方式同时发送（需要同时传入notify_url）
	 **/
	private $notifyType;
	
	/** 
	 * 应用接收消息的地址
	 **/
	private $notifyUrl;
	
	/** 
	 * 状态
	 **/
	private $status;
	
	/** 
	 * 需同步消息的类型
	 **/
	private $synchronizations;
	
	/** 
	 * 主题
	 **/
	private $topics;
	
	private $apiParas = array();
	
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		$this->apiParas["attributes"] = $attributes;
	}

	public function getAttributes()
	{
		return $this->attributes;
	}

	public function setClearAttributes($clearAttributes)
	{
		$this->clearAttributes = $clearAttributes;
		$this->apiParas["clear_attributes"] = $clearAttributes;
	}

	public function getClearAttributes()
	{
		return $this->clearAttributes;
	}

	public function setIsNotify($isNotify)
	{
		$this->isNotify = $isNotify;
		$this->apiParas["is_notify"] = $isNotify;
	}

	public function getIsNotify()
	{
		return $this->isNotify;
	}

	public function setIsvAppKey($isvAppKey)
	{
		$this->isvAppKey = $isvAppKey;
		$this->apiParas["isv_app_key"] = $isvAppKey;
	}

	public function getIsvAppKey()
	{
		return $this->isvAppKey;
	}

	public function setNotifyType($notifyType)
	{
		$this->notifyType = $notifyType;
		$this->apiParas["notify_type"] = $notifyType;
	}

	public function getNotifyType()
	{
		return $this->notifyType;
	}

	public function setNotifyUrl($notifyUrl)
	{
		$this->notifyUrl = $notifyUrl;
		$this->apiParas["notify_url"] = $notifyUrl;
	}

	public function getNotifyUrl()
	{
		return $this->notifyUrl;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setSynchronizations($synchronizations)
	{
		$this->synchronizations = $synchronizations;
		$this->apiParas["synchronizations"] = $synchronizations;
	}

	public function getSynchronizations()
	{
		return $this->synchronizations;
	}

	public function setTopics($topics)
	{
		$this->topics = $topics;
		$this->apiParas["topics"] = $topics;
	}

	public function getTopics()
	{
		return $this->topics;
	}

	public function getApiMethodName()
	{
		return "taobao.increment.xiaoer.subscribe";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->attributes,1024,"attributes");
		RequestCheckUtil::checkNotNull($this->isvAppKey,"isvAppKey");
		RequestCheckUtil::checkMaxValue($this->notifyType,3,"notifyType");
		RequestCheckUtil::checkMinValue($this->notifyType,0,"notifyType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
