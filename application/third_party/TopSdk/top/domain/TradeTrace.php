<?php

/**
 * 交易回流信息
 * @author auto create
 */
class TradeTrace
{
	
	/** 
	 * 动作发生的时间
	 **/
	public $actionTime;
	
	/** 
	 * 应用标题
	 **/
	public $appTitle;
	
	/** 
	 * 子订单的id列表,以逗号分割
	 **/
	public $orderIds;
	
	/** 
	 * 备注字段
	 **/
	public $remark;
	
	/** 
	 * 卖家的淘宝nick
	 **/
	public $sellerNick;
	
	/** 
	 * 回流的订单状态
	 **/
	public $status;
	
	/** 
	 * 交易tid
	 **/
	public $tid;	
}
?>