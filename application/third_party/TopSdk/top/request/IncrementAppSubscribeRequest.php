<?php
/**
 * TOP API: taobao.increment.app.subscribe request
 * 
 * @author auto create
 * @since 1.0, 2012.04.09
 */
class IncrementAppSubscribeRequest
{
	/** 
	 * 要订阅的消息状态。可选值有：商品消息状态、退款消息状态、交易消息状态里面的状态类型。status字段支持多个状态同时订阅。每个大类的状态（商品消息状态里的所有消息状态属于同一个大类，退款消息状态里的所有消息状态属于同一个大类，交易消息状态里的所有消息状态属于同一个大类）要合并到一起传入。每个大类的消息内部用","连接，大类之间用";"连接。另，大类的排列顺序要和topics入参中类型的顺序一一对应，如果不传具体某个大类的消息而传入all，表示订阅这个大类下目前可订阅的所有消息状态，但不包括未来新开放的消息。如：传入了topics="trade;refund;item"时：当传入status="all;all;all"表示我订阅者三种类型消息下的所有状态的消息；当传入status="TradeCreate,TradeSuccess;all;ItemDelete"表示我订阅交易类型下的交易创建和交易成功的消息，退款类型下的所有退款相关消息，商品下的商品删除的消息。
	 **/
	private $status;
	
	/** 
	 * 要订阅的消息类别。可多个类别同时订阅，每种类型之间以";"分隔。具体选值请见：增量消息类型说明。例如，如果要同时订阅交易，退款，商品的消息传入的字符串就是"trade;refund;item"
	 **/
	private $topics;
	
	private $apiParas = array();
	
	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
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
		return "taobao.increment.app.subscribe";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->topics,"topics");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
