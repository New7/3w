<?php

/**
 * 用户授权信息
 * @author auto create
 */
class AuthorizeMessage
{
	
	/** 
	 * ISV的AppKey
	 **/
	public $appKey;
	
	/** 
	 * 用户创建授权给当前ISV的时间
	 **/
	public $created;
	
	/** 
	 * 用户的授权到期时间
	 **/
	public $endDate;
	
	/** 
	 * 用户的授权信息修改时间
	 **/
	public $modified;
	
	/** 
	 * 授权用户的淘宝昵称
	 **/
	public $nick;
	
	/** 
	 * 用户的授权开始时间。授权当天开始计算。start_date是每个授权周期开始的时间，如果这个周期没有结束用户就延长或修改了授权周期，这个开始时间是不会变的，除非这个周期结束以后再重新开始新的周期，这个字段才会被改变
	 **/
	public $startDate;
	
	/** 
	 * 用户的授权状态：normal（正常），expired（过期）
	 **/
	public $status;
	
	/** 
	 * 用户的授权是否已经生效（生效表示能够收到变更消息）
	 **/
	public $valid;	
}
?>