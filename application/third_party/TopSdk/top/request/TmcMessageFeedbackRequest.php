<?php
/**
 * TOP API: taobao.tmc.message.feedback request
 * 
 * @author auto create
 * @since 1.0, 2014.12.05
 */
class TmcMessageFeedbackRequest
{
	/** 
	 * 消息对应的数据id，比如商品id，交易id
	 **/
	private $dataId;
	
	/** 
	 * 消息错误描述
	 **/
	private $errorCode;
	
	/** 
	 * 对错误的详细描述，主要用于isv修复问题
	 **/
	private $errorMsg;
	
	/** 
	 * 回传消息的appkey,从消息中获取
	 **/
	private $isvAppkey;
	
	/** 
	 * 消息id,在消息中可以取到。
	 **/
	private $msgId;
	
	/** 
	 * 反馈的消息名称
	 **/
	private $msgTopic;
	
	/** 
	 * 消息处理时间
	 **/
	private $processTime;
	
	/** 
	 * 消息发送时间,从消息中获取
	 **/
	private $pubTime;
	
	/** 
	 * 消息对应的用户id
	 **/
	private $userId;
	
	/** 
	 * 消息对应的用户nick,没有不填
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setDataId($dataId)
	{
		$this->dataId = $dataId;
		$this->apiParas["data_id"] = $dataId;
	}

	public function getDataId()
	{
		return $this->dataId;
	}

	public function setErrorCode($errorCode)
	{
		$this->errorCode = $errorCode;
		$this->apiParas["error_code"] = $errorCode;
	}

	public function getErrorCode()
	{
		return $this->errorCode;
	}

	public function setErrorMsg($errorMsg)
	{
		$this->errorMsg = $errorMsg;
		$this->apiParas["error_msg"] = $errorMsg;
	}

	public function getErrorMsg()
	{
		return $this->errorMsg;
	}

	public function setIsvAppkey($isvAppkey)
	{
		$this->isvAppkey = $isvAppkey;
		$this->apiParas["isv_appkey"] = $isvAppkey;
	}

	public function getIsvAppkey()
	{
		return $this->isvAppkey;
	}

	public function setMsgId($msgId)
	{
		$this->msgId = $msgId;
		$this->apiParas["msg_id"] = $msgId;
	}

	public function getMsgId()
	{
		return $this->msgId;
	}

	public function setMsgTopic($msgTopic)
	{
		$this->msgTopic = $msgTopic;
		$this->apiParas["msg_topic"] = $msgTopic;
	}

	public function getMsgTopic()
	{
		return $this->msgTopic;
	}

	public function setProcessTime($processTime)
	{
		$this->processTime = $processTime;
		$this->apiParas["process_time"] = $processTime;
	}

	public function getProcessTime()
	{
		return $this->processTime;
	}

	public function setPubTime($pubTime)
	{
		$this->pubTime = $pubTime;
		$this->apiParas["pub_time"] = $pubTime;
	}

	public function getPubTime()
	{
		return $this->pubTime;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
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
		return "taobao.tmc.message.feedback";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->errorCode,"errorCode");
		RequestCheckUtil::checkNotNull($this->isvAppkey,"isvAppkey");
		RequestCheckUtil::checkNotNull($this->msgId,"msgId");
		RequestCheckUtil::checkNotNull($this->msgTopic,"msgTopic");
		RequestCheckUtil::checkNotNull($this->processTime,"processTime");
		RequestCheckUtil::checkNotNull($this->pubTime,"pubTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
