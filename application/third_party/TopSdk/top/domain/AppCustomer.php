<?php

/**
 * 开通增量消息服务的应用用户
 * @author auto create
 */
class AppCustomer
{
	
	/** 
	 * isv为用户开通增量消息服务的时间
	 **/
	public $created;
	
	/** 
	 * 最后修改时间，开通、用户的session生效或失效都会更改这个时间。
	 **/
	public $modified;
	
	/** 
	 * 开通用户的淘宝昵称
	 **/
	public $nick;
	
	/** 
	 * 应用用户开通增量消息服务的状态：valid_session表示用户开通的关系正常。在此状态下，授权有效时，才会发送消息；无效时不会发送消息。
	 **/
	public $status;
	
	/** 
	 * 应用为用户开通的消息类型。只有用户开通的消息在应用所订阅的消息类别集合内时，应用才能收到相应的消息。例如：应用订阅添加商品，用户开通了添加商品和删除商品，此时应用只能收到添加商品的消息，收不到删除商品的消息。
	 **/
	public $subscriptions;
	
	/** 
	 * 用户使用的功能。get表示增量api取消息功能；notify表示主动通知功能；syn表示同步数据到ISV数据库功能。
	 **/
	public $type;
	
	/** 
	 * 用户编号
	 **/
	public $userId;	
}
?>