<?php
/**
 * TOP API: taobao.mip.log request
 * 
 * @author auto create
 * @since 1.0, 2013.05.15
 */
class MipLogRequest
{
	/** 
	 * 三方集成消息系统消息内容
	 **/
	private $content;
	
	/** 
	 * 三方集成消息系统消息发送端IP
	 **/
	private $fromIp;
	
	/** 
	 * 消息发送时间戳，格式必须是Long型
	 **/
	private $msgSendTime;
	
	/** 
	 * 淘宝用户昵称
	 **/
	private $nick;
	
	/** 
	 * 消息接收端appkey
	 **/
	private $toAppkey;
	
	/** 
	 * 三方集成消息系统消息接收端IP
	 **/
	private $toIp;
	
	/** 
	 * 三方集成消息系统中的消息topic
	 **/
	private $topic;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setFromIp($fromIp)
	{
		$this->fromIp = $fromIp;
		$this->apiParas["from_ip"] = $fromIp;
	}

	public function getFromIp()
	{
		return $this->fromIp;
	}

	public function setMsgSendTime($msgSendTime)
	{
		$this->msgSendTime = $msgSendTime;
		$this->apiParas["msg_send_time"] = $msgSendTime;
	}

	public function getMsgSendTime()
	{
		return $this->msgSendTime;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setToAppkey($toAppkey)
	{
		$this->toAppkey = $toAppkey;
		$this->apiParas["to_appkey"] = $toAppkey;
	}

	public function getToAppkey()
	{
		return $this->toAppkey;
	}

	public function setToIp($toIp)
	{
		$this->toIp = $toIp;
		$this->apiParas["to_ip"] = $toIp;
	}

	public function getToIp()
	{
		return $this->toIp;
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
		return "taobao.mip.log";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->fromIp,"fromIp");
		RequestCheckUtil::checkNotNull($this->msgSendTime,"msgSendTime");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkNotNull($this->toAppkey,"toAppkey");
		RequestCheckUtil::checkNotNull($this->toIp,"toIp");
		RequestCheckUtil::checkNotNull($this->topic,"topic");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
