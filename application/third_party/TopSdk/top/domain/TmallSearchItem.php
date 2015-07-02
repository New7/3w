<?php

/**
 * 天猫搜索结果数据结构
 * @author auto create
 */
class TmallSearchItem
{
	
	/** 
	 * 邮费
	 **/
	public $fastPostFee;
	
	/** 
	 * 是否货到付款
	 **/
	public $isCod;
	
	/** 
	 * 是否折扣
	 **/
	public $isPromotion;
	
	/** 
	 * 搜索宝贝的数字id
	 **/
	public $itemId;
	
	/** 
	 * 搜索宝贝的宝贝所在地
	 **/
	public $location;
	
	/** 
	 * 搜索宝贝的卖家昵称
	 **/
	public $nick;
	
	/** 
	 * 搜索宝贝的图片url
	 **/
	public $picPath;
	
	/** 
	 * 搜索宝贝的一口价
	 **/
	public $price;
	
	/** 
	 * 搜索宝贝的一口价折扣价
	 **/
	public $priceWithRate;
	
	/** 
	 * 搜索宝贝的卖家所在地
	 **/
	public $sellerLoc;
	
	/** 
	 * 是否免邮
	 **/
	public $shipping;
	
	/** 
	 * 搜索宝贝的已售数量
	 **/
	public $sold;
	
	/** 
	 * 搜索宝贝的spuid
	 **/
	public $spuId;
	
	/** 
	 * 搜索宝贝的标题
	 **/
	public $title;
	
	/** 
	 * 搜索宝贝url
	 **/
	public $url;
	
	/** 
	 * 搜索宝贝的卖家数字id
	 **/
	public $userId;	
}
?>