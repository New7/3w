<?php
/**
 * TOP API: taobao.trade.receipt.confirm.page request
 * 
 * @author auto create
 * @since 1.0, 2012.03.13
 */
class TradeReceiptConfirmPageRequest
{
	/** 
	 * 业务订单编号
	 **/
	private $bizOrderId;
	
	/** 
	 * 流程页面API，特有的BIZ Type为620
	 **/
	private $bizType;
	
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
	 * 页面头部图片高度
	 **/
	private $topHeight;
	
	/** 
	 * 页面头部图片链接地址
	 **/
	private $topUrl;
	
	/** 
	 * 头尾页面图片宽度
	 **/
	private $width;
	
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
		return "taobao.trade.receipt.confirm.page";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->bottomHeight,"bottomHeight");
		RequestCheckUtil::checkNotNull($this->bottomUrl,"bottomUrl");
		RequestCheckUtil::checkNotNull($this->callbackUrl,"callbackUrl");
		RequestCheckUtil::checkNotNull($this->topHeight,"topHeight");
		RequestCheckUtil::checkNotNull($this->topUrl,"topUrl");
		RequestCheckUtil::checkNotNull($this->width,"width");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
