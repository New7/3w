<?php
/**
 * TOP API: taobao.trade.order.confirm.page request
 * 
 * @author auto create
 * @since 1.0, 2012.01.09
 */
class TradeOrderConfirmPageRequest
{
	/** 
	 * 购买数量,以θ分隔
	 **/
	private $buyAmount;
	
	/** 
	 * 买家昵称，登陆验证用
	 **/
	private $buyerNick;
	
	/** 
	 * cod具体运费信息
	 **/
	private $codPostFee;
	
	/** 
	 * cod运费模板id。如果不存在，则表示不支持cod，此时忽略cod_post_fee
	 **/
	private $codPostId;
	
	/** 
	 * 外站宝贝数字id,多个以θ分隔，最多50项。每个宝贝数字id长度上限为32
	 **/
	private $itemId;
	
	/** 
	 * 宝贝图片完整链接,以θ分隔。每个图片链接字符串长度上限100。每个宝贝的图片都必须传，否则不能下单。图片必须以：jpg、gif、png结尾。
	 **/
	private $itemPic;
	
	/** 
	 * 宝贝单价（单个宝贝打折后的价格），单位为元，精确0.00。以θ分隔.
	 **/
	private $itemPrice;
	
	/** 
	 * 宝贝sku信息，以θ分隔.是对宝贝一些属性描述，如颜色，尺码等,如果没有sku，则这个参数可以不传。每个宝贝的sku字符串长度上限为100个字符。
	 **/
	private $itemSku;
	
	/** 
	 * 宝贝标题，以θ分隔，最多50项,每一个宝贝标题小于60个字符
	 **/
	private $itemTitle;
	
	/** 
	 * 订单上的折扣
	 **/
	private $orderDiscount;
	
	/** 
	 * 下单来源。
	 **/
	private $orderFrom;
	
	/** 
	 * 优惠信息描述，长度上限100
	 **/
	private $orderPromotionDesc;
	
	/** 
	 * 普通运送具体运费信息，与post_id必选其一，如果两者都有，覆盖通过post_id获取的运费信息。
	 **/
	private $postFee;
	
	/** 
	 * 普通运费模板id
	 **/
	private $postId;
	
	/** 
	 * 卖家昵称
	 **/
	private $sellerNick;
	
	/** 
	 * 对应站内的宝贝数字id，并且以θ分隔，每个宝贝数字id长度上限位22。没有则用0代替，例如：0θ0
	 **/
	private $tbItemId;
	
	private $apiParas = array();
	
	public function setBuyAmount($buyAmount)
	{
		$this->buyAmount = $buyAmount;
		$this->apiParas["buy_amount"] = $buyAmount;
	}

	public function getBuyAmount()
	{
		return $this->buyAmount;
	}

	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setCodPostFee($codPostFee)
	{
		$this->codPostFee = $codPostFee;
		$this->apiParas["cod_post_fee"] = $codPostFee;
	}

	public function getCodPostFee()
	{
		return $this->codPostFee;
	}

	public function setCodPostId($codPostId)
	{
		$this->codPostId = $codPostId;
		$this->apiParas["cod_post_id"] = $codPostId;
	}

	public function getCodPostId()
	{
		return $this->codPostId;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setItemPic($itemPic)
	{
		$this->itemPic = $itemPic;
		$this->apiParas["item_pic"] = $itemPic;
	}

	public function getItemPic()
	{
		return $this->itemPic;
	}

	public function setItemPrice($itemPrice)
	{
		$this->itemPrice = $itemPrice;
		$this->apiParas["item_price"] = $itemPrice;
	}

	public function getItemPrice()
	{
		return $this->itemPrice;
	}

	public function setItemSku($itemSku)
	{
		$this->itemSku = $itemSku;
		$this->apiParas["item_sku"] = $itemSku;
	}

	public function getItemSku()
	{
		return $this->itemSku;
	}

	public function setItemTitle($itemTitle)
	{
		$this->itemTitle = $itemTitle;
		$this->apiParas["item_title"] = $itemTitle;
	}

	public function getItemTitle()
	{
		return $this->itemTitle;
	}

	public function setOrderDiscount($orderDiscount)
	{
		$this->orderDiscount = $orderDiscount;
		$this->apiParas["order_discount"] = $orderDiscount;
	}

	public function getOrderDiscount()
	{
		return $this->orderDiscount;
	}

	public function setOrderFrom($orderFrom)
	{
		$this->orderFrom = $orderFrom;
		$this->apiParas["order_from"] = $orderFrom;
	}

	public function getOrderFrom()
	{
		return $this->orderFrom;
	}

	public function setOrderPromotionDesc($orderPromotionDesc)
	{
		$this->orderPromotionDesc = $orderPromotionDesc;
		$this->apiParas["order_promotion_desc"] = $orderPromotionDesc;
	}

	public function getOrderPromotionDesc()
	{
		return $this->orderPromotionDesc;
	}

	public function setPostFee($postFee)
	{
		$this->postFee = $postFee;
		$this->apiParas["post_fee"] = $postFee;
	}

	public function getPostFee()
	{
		return $this->postFee;
	}

	public function setPostId($postId)
	{
		$this->postId = $postId;
		$this->apiParas["post_id"] = $postId;
	}

	public function getPostId()
	{
		return $this->postId;
	}

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function setTbItemId($tbItemId)
	{
		$this->tbItemId = $tbItemId;
		$this->apiParas["tb_item_id"] = $tbItemId;
	}

	public function getTbItemId()
	{
		return $this->tbItemId;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.order.confirm.page";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyAmount,"buyAmount");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->itemPic,"itemPic");
		RequestCheckUtil::checkNotNull($this->itemPrice,"itemPrice");
		RequestCheckUtil::checkNotNull($this->itemTitle,"itemTitle");
		RequestCheckUtil::checkNotNull($this->orderFrom,"orderFrom");
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
		RequestCheckUtil::checkNotNull($this->tbItemId,"tbItemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
