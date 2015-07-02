<?php
/**
 * TOP API: taobao.trade.refund.handle.page request
 * 
 * @author auto create
 * @since 1.0, 2012.01.09
 */
class TradeRefundHandlePageRequest
{
	/** 
	 * 商品备注
	 **/
	private $auctionRemark;
	
	/** 
	 * 业务订单编号
	 **/
	private $bizOrderId;
	
	/** 
	 * 页面底部图片高度
	 **/
	private $bottomHeight;
	
	/** 
	 * 页面底部图片链接地址
	 **/
	private $bottomUrl;
	
	/** 
	 * 执行返回回调地址，流程结束后的返回页面，需要通过回调返回到外部网店
	 **/
	private $callbackUrl;
	
	/** 
	 * 订单备注
	 **/
	private $orderRemark;
	
	/** 
	 * 退款编号
	 **/
	private $refundId;
	
	/** 
	 * 页面头部图片高度
	 **/
	private $topHeight;
	
	/** 
	 * 页面头部图片链接地址
	 **/
	private $topUrl;
	
	/** 
	 * 动作类型(修改协议=1,买家退款发货=2,卖家同意退款协议=3,卖家拒绝退款协议=4,卖家确认到货=5)
	 **/
	private $userAction;
	
	/** 
	 * 头尾页面图片宽度
	 **/
	private $width;
	
	private $apiParas = array();
	
	public function setAuctionRemark($auctionRemark)
	{
		$this->auctionRemark = $auctionRemark;
		$this->apiParas["auction_remark"] = $auctionRemark;
	}

	public function getAuctionRemark()
	{
		return $this->auctionRemark;
	}

	public function setBizOrderId($bizOrderId)
	{
		$this->bizOrderId = $bizOrderId;
		$this->apiParas["biz_order_id"] = $bizOrderId;
	}

	public function getBizOrderId()
	{
		return $this->bizOrderId;
	}

	public function setBottomHeight($bottomHeight)
	{
		$this->bottomHeight = $bottomHeight;
		$this->apiParas["bottom_height"] = $bottomHeight;
	}

	public function getBottomHeight()
	{
		return $this->bottomHeight;
	}

	public function setBottomUrl($bottomUrl)
	{
		$this->bottomUrl = $bottomUrl;
		$this->apiParas["bottom_url"] = $bottomUrl;
	}

	public function getBottomUrl()
	{
		return $this->bottomUrl;
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

	public function setOrderRemark($orderRemark)
	{
		$this->orderRemark = $orderRemark;
		$this->apiParas["order_remark"] = $orderRemark;
	}

	public function getOrderRemark()
	{
		return $this->orderRemark;
	}

	public function setRefundId($refundId)
	{
		$this->refundId = $refundId;
		$this->apiParas["refund_id"] = $refundId;
	}

	public function getRefundId()
	{
		return $this->refundId;
	}

	public function setTopHeight($topHeight)
	{
		$this->topHeight = $topHeight;
		$this->apiParas["top_height"] = $topHeight;
	}

	public function getTopHeight()
	{
		return $this->topHeight;
	}

	public function setTopUrl($topUrl)
	{
		$this->topUrl = $topUrl;
		$this->apiParas["top_url"] = $topUrl;
	}

	public function getTopUrl()
	{
		return $this->topUrl;
	}

	public function setUserAction($userAction)
	{
		$this->userAction = $userAction;
		$this->apiParas["user_action"] = $userAction;
	}

	public function getUserAction()
	{
		return $this->userAction;
	}

	public function setWidth($width)
	{
		$this->width = $width;
		$this->apiParas["width"] = $width;
	}

	public function getWidth()
	{
		return $this->width;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.refund.handle.page";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
		RequestCheckUtil::checkNotNull($this->bottomHeight,"bottomHeight");
		RequestCheckUtil::checkNotNull($this->bottomUrl,"bottomUrl");
		RequestCheckUtil::checkNotNull($this->callbackUrl,"callbackUrl");
		RequestCheckUtil::checkNotNull($this->refundId,"refundId");
		RequestCheckUtil::checkNotNull($this->topHeight,"topHeight");
		RequestCheckUtil::checkNotNull($this->topUrl,"topUrl");
		RequestCheckUtil::checkNotNull($this->userAction,"userAction");
		RequestCheckUtil::checkNotNull($this->width,"width");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
