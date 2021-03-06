<?php

/**
 * 消息通道的用户结构
 * @author auto create
 */
class TmcUser
{
	
	/** 
	 * 用户首次开通时间
	 **/
	public $created;
	
	/** 
	 * 接收用户消息的组名
	 **/
	public $groupName;
	
	/** 
	 * 用户授权是否有效，true表示授权有效，false表示授权过期
	 **/
	public $isValid;
	
	/** 
	 * 用户最后开通时间
	 **/
	public $modified;
	
	/** 
	 * 用户开通的消息类型列表。如果为空表示应用开通的所有类型
	 **/
	public $topics;
	
	/** 
	 * 用户ID
	 **/
	public $userId;
	
	/** 
	 * 用户昵称
	 **/
	public $userNick;	
}
?>