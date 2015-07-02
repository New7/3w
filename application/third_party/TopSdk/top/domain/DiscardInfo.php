<?php

/**
 * 用户丢失消息的数据结构
 * @author auto create
 */
class DiscardInfo
{
	
	/** 
	 * 丢弃消息的结束时间
	 **/
	public $end;
	
	/** 
	 * 用户nick
	 **/
	public $nick;
	
	/** 
	 * 丢弃消息的开始时间
	 **/
	public $start;
	
	/** 
	 * 非授权消息订阅的关键字，比如按商品编号订阅时，此值为num_iid
	 **/
	public $subscribeKey;
	
	/** 
	 * 非授权消息订阅的值，比如按商品编号订阅时，此值为商品的具体编号
	 **/
	public $subscribeValue;
	
	/** 
	 * 消息类型
	 **/
	public $type;
	
	/** 
	 * 用户id
	 **/
	public $userId;	
}
?>