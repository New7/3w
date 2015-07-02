<?php
/**
 * TOP API: taobao.trade.order.cancel.page request
 * 
 * @author auto create
 * @since 1.0, 2012.01.09
 */
class TradeOrderCancelPageRequest
{
	/** 
	 * 业务订单编号
	 **/
	private $bizOrderId;
	
	/** 
	 * 业务订单类型，流程页面API业务类型都为620
	 **/
	private $bizType;
	
	/** 
	 * 执行返回回调地址，流程结束后的返回页面，需要通过回调返回到外部网店
	 **/
	private $callbackUrl;
	
	private $apiParas = array();
	
	public function setBizOrderId($bizOrderId)
	{
		$this->bizOrderId = $bizOrderId;
		$this->apiParas["biz_order_id"] = $bizOrderId;
	}

	public function getBizOrderId()
	{
		return $this->bizOrderId;
	}

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setCallbackUrl($callbackUrl)
	{
		$this->callbackUrl = $callbackUrl;
		$this->apiParas["callback_url"] = $callbackUrl;
	}

	public function getCallbackUrl()
	{
		return $this->callbackUrl;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.order.cancel.page";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->callbackUrl,"callbackUrl");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
