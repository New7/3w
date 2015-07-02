<?php

/**
 * 非授权的按属性的订阅数据
 * @author auto create
 */
class AttributeSubscription
{
	
	/** 
	 * 订阅的属性名称，如商品的编号"num_iid"。
	 **/
	public $subscribeKey;
	
	/** 
	 * 订阅消息业务属性值。比如商品具体编号“123456”。
	 **/
	public $subscribeValue;
	
	/** 
	 * 订阅的消息类别，比如商品消息为item。
	 **/
	public $topic;	
}
?>