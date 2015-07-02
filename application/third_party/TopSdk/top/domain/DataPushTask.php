<?php

/**
 * 数据推送任务
 * @author auto create
 */
class DataPushTask
{
	
	/** 
	 * 任务所属的appkey
	 **/
	public $appKey;
	
	/** 
	 * 任务创建时间
	 **/
	public $created;
	
	/** 
	 * 任务编号
	 **/
	public $id;
	
	/** 
	 * 下次执行时间
	 **/
	public $nextExecuteTime;
	
	/** 
	 * 上一次同步到的时间点
	 **/
	public $nowSyncTime;
	
	/** 
	 * 任务的业务参数，用json格式表示
	 **/
	public $params;
	
	/** 
	 * 任务类型代码
	 **/
	public $type;
	
	/** 
	 * 任务所属的用户编号
	 **/
	public $userId;
	
	/** 
	 * 用户的nick
	 **/
	public $userNick;
	
	/** 
	 * 任务的版本号，在更新任务时，需要用到此数据
	 **/
	public $version;	
}
?>