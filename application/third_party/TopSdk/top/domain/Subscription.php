<?php

/**
 * 订阅类型
 * @author auto create
 */
class Subscription
{
	
	/** 
	 * 增量消息的状态（隶属于主题）。具体选值请见：商品消息状态、退款消息状态、交易消息状态中的说明。
	 **/
	public $status;
	
	/** 
	 * 增量消息所属的主题。
可选值 
trade（交易类型） 
item（商品类型） 
refund（退款类型）
	 **/
	public $topic;	
}
?>