<?php
/**
 * TOP API: taobao.tp.appkey.apply request
 * 
 * @author auto create
 * @since 1.0, 2011.08.25
 */
class TpAppkeyApplyRequest
{
	/** 
	 * 创建的子应用的回调地址
	 **/
	private $callBackUrl;
	
	/** 
	 * 购买TP应用的淘宝用户会员名
	 **/
	private $nick;
	
	/** 
	 * 通知URL
	 **/
	private $notifyUrl;
	
	/** 
	 * 服务结束时间
	 **/
	private $orderEndTime;
	
	/** 
	 * 服务开始时间，大于结束时间
	 **/
	private $orderStartTime;
	
	/** 
	 * TP和用户签署的订单号
	 **/
	private $outTradeNo;
	
	/** 
	 * 需要创建的子应用的应用名称
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setCallBackUrl($callBackUrl)
	{
		$this->callBackUrl = $callBackUrl;
		$this->apiParas["call_back_url"] = $callBackUrl;
	}

	public function getCallBackUrl()
	{
		return $this->callBackUrl;
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

	public function setNotifyUrl($notifyUrl)
	{
		$this->notifyUrl = $notifyUrl;
		$this->apiParas["notify_url"] = $notifyUrl;
	}

	public function getNotifyUrl()
	{
		return $this->notifyUrl;
	}

	public function setOrderEndTime($orderEndTime)
	{
		$this->orderEndTime = $orderEndTime;
		$this->apiParas["order_end_time"] = $orderEndTime;
	}

	public function getOrderEndTime()
	{
		return $this->orderEndTime;
	}

	public function setOrderStartTime($orderStartTime)
	{
		$this->orderStartTime = $orderStartTime;
		$this->apiParas["order_start_time"] = $orderStartTime;
	}

	public function getOrderStartTime()
	{
		return $this->orderStartTime;
	}

	public function setOutTradeNo($outTradeNo)
	{
		$this->outTradeNo = $outTradeNo;
		$this->apiParas["out_trade_no"] = $outTradeNo;
	}

	public function getOutTradeNo()
	{
		return $this->outTradeNo;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.tp.appkey.apply";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->callBackUrl,1024,"callBackUrl");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkMaxLength($this->nick,32,"nick");
		RequestCheckUtil::checkMaxLength($this->notifyUrl,1024,"notifyUrl");
		RequestCheckUtil::checkNotNull($this->orderEndTime,"orderEndTime");
		RequestCheckUtil::checkNotNull($this->orderStartTime,"orderStartTime");
		RequestCheckUtil::checkNotNull($this->outTradeNo,"outTradeNo");
		RequestCheckUtil::checkMaxLength($this->outTradeNo,512,"outTradeNo");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,1024,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
