<?php

/**
 * 使用数据推送的用户信息
 * @author auto create
 */
class JdpUser
{
	
	/** 
	 * 和数据回流绑定的appkey，用户的数据推到此appkey对应的rds后，会回传X_DOWNLOADED消息
	 **/
	public $hlAppkey;
	
	/** 
	 * 用户等级，用于区分大卖家，值越大则订单量越大
	 **/
	public $level;
	
	/** 
	 * rds的id，平台appkey会返回rds_id而不是rds_name
	 **/
	public $rdsId;
	
	/** 
	 * rds数据库的实例名
	 **/
	public $rdsName;
	
	/** 
	 * 卖家类型，B表示商城卖家，C表示淘宝卖家
	 **/
	public $sellerType;
	
	/** 
	 * 0:暂停
1：正常
2：sessoin失效，停止
3：已删除
	 **/
	public $status;
	
	/** 
	 * 用户id
	 **/
	public $userId;
	
	/** 
	 * 用户昵称
	 **/
	public $userNick;	
}
?>