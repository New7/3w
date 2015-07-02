<?php

/**
 * 用户当前交易，购物车，收藏夹状态
 * @author auto create
 */
class UserState
{
	
	/** 
	 * 用户购物车中商品数量（不包括商城特殊商品，比如：物流宝商品）
	 **/
	public $carItemNum;
	
	/** 
	 * 网站购物车的URL地址
	 **/
	public $carUrl;
	
	/** 
	 * 用户收藏商品数量
	 **/
	public $favoriteItemNum;
	
	/** 
	 * 我的收藏url
	 **/
	public $favoriteItemUrl;
	
	/** 
	 * 网站订单管理URL地址
	 **/
	public $orderUrl;
	
	/** 
	 * 用户下单后等待付款的订单数量
	 **/
	public $unpayOrderNum;
	
	/** 
	 * Wap购物车的URL地址
	 **/
	public $wapCarUrl;
	
	/** 
	 * Wap我的收藏url
	 **/
	public $wapFavoriteItemUrl;
	
	/** 
	 * Wap订单管理URL地址
	 **/
	public $wapOrderUrl;	
}
?>