<?php

/**
 * 表示需要主动发送的消息信息
 * @author auto create
 */
class NotifyInfo
{
	
	/** 
	 * 增量消息的状态（隶属于主题）。具体选值请见：商品消息状态、退款消息状态、交易消息状态中的说明。isNotify应为隶属于topic类型的子类型，比如topic为trade，则isNotify应为TradeCreate
	 **/
	public $isNotify;
	
	/** 
	 * 增量消息所属的主题。可选值 trade（交易类型） item（商品类型） refund（退款类型）
	 **/
	public $topic;	
}
?>