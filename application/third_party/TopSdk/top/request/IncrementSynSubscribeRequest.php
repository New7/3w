<?php
/**
 * TOP API: taobao.increment.syn.subscribe request
 * 
 * @author auto create
 * @since 1.0, 2013.04.25
 */
class IncrementSynSubscribeRequest
{
	/** 
	 * 要订阅和修改的应用appkey，这个appkey是isv的appkey
	 **/
	private $isvAppKey;
	
	/** 
	 * 需同步消息的类型。可多个类别同时订阅，每种类型之间以";"分隔。具体选值请见：同步数据的消息类型说明。例如，如果要同时订阅交易，退款，商品的消息传入的字符串就是"trade;refund;item"。<br>
如果为不填写此字段时，此api会把已有的同步订阅消息修改成空，topnotify就不会发送同步消息。
	 **/
	private $synchronizations;
	
	private $apiParas = array();
	
	public function setIsvAppKey($isvAppKey)
	{
		$this->isvAppKey = $isvAppKey;
		$this->apiParas["isv_app_key"] = $isvAppKey;
	}

	public function getIsvAppKey()
	{
		return $this->isvAppKey;
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

	public function getApiMethodName()
	{
		return "taobao.increment.syn.subscribe";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isvAppKey,"isvAppKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
