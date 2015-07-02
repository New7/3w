<?php

/**
 * ISV订阅信息
 * @author auto create
 */
class SubscribeMessage
{
	
	/** 
	 * ISV的应用AppKey
	 **/
	public $appKey;
	
	/** 
	 * ISV应用的安全等级
	 **/
	public $appLevel;
	
	/** 
	 * 此字段标记用户对于交易订单的过滤字段。字段格式key1:value1:key1name:value1name;key2:value2:key2name:value2name;……每个标记有4个部分：key(交易中标记的key)，value(交易中标记的value)，keyname(交易消息中标记的key的别名)，valuename(交易消息中标记的value的别名)，4个部分之间以冒号":"连接。不同标记之间以分号";"。连接默认此字段为空，表示不判断交易的标记，是要订阅的都存下来。如果此字段不为空，则根据定义的key和value对交易消息进行过滤。如果一个标记都没有命中，则此交易消息不被保存下来。
	 **/
	public $attributes;
	
	/** 
	 * ISV的订阅记录的创建时间
	 **/
	public $createDate;
	
	/** 
	 * ISV的订阅信息修改时间
	 **/
	public $modified;
	
	/** 
	 * ISV的主动发送消息列表。表示哪些消息需要主动发送给App。如果需要获取ISV的消息列表，传入notifyInfo即可
	 **/
	public $notifyInfos;
	
	/** 
	 * 主动通知消息的发送类型：0表示不发送；1表示通过topMQ发送；2表示通过topComet发送；3表示同时通过两种方式发送
	 **/
	public $notifyType;
	
	/** 
	 * App接受消息的地址
	 **/
	public $notifyUrl;
	
	/** 
	 * ISV的订阅消息类型列表。如果需要获取ISV的授权列表，传入subscription即可
	 **/
	public $subscriptions;
	
	/** 
	 * 同步数据类型，如trade;refund;item表示需要同步交易，退款和商品的数据。只有订阅了同步服务时，此字段才会返回；否则返回其它字段。
	 **/
	public $synchronizations;
	
	/** 
	 * 应用所属的用户分类。目前一共分为3种：all(一个用户所有的消息都能接收，包扩用户作为卖家和作为买家所关联的消息);seller(只能接收一个用户作为卖家所关联的消息);buyer(只能接收一个用户作为买家所关联的消息)。默认是all。
目前的消息中，商品消息对此字段不敏感（不受买家卖家过滤），交易退款相关的消息会根据此字段进行存储
	 **/
	public $userRole;
	
	/** 
	 * ISV的订阅是否已经生效（生效表示能够正常接收消息等）
	 **/
	public $valid;	
}
?>