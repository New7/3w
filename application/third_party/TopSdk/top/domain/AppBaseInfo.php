<?php

/**
 * App基本信息
 * @author auto create
 */
class AppBaseInfo
{
	
	/** 
	 * app状态，1.线上运行, 2. 正式环境测试中, 6.开发中
	 **/
	public $appStatus;
	
	/** 
	 * Null
	 **/
	public $appTag;
	
	/** 
	 * app的唯一标识：app key
	 **/
	public $appkey;
	
	/** 
	 * app描述
	 **/
	public $description;
	
	/** 
	 * Null
	 **/
	public $gmtCreate;
	
	/** 
	 * Null
	 **/
	public $gmtModified;
	
	/** 
	 * Null
	 **/
	public $id;
	
	/** 
	 * isv的数字id
	 **/
	public $isvId;
	
	/** 
	 * 开发者或开发公司的名称
	 **/
	public $isvName;
	
	/** 
	 * app Logo url，需要拼接前缀 http://img01.taobaocdn.com/bao/uploaded/i1/
	 **/
	public $logo;
	
	/** 
	 * Null
	 **/
	public $phone;
	
	/** 
	 * Null
	 **/
	public $supportEmail;
	
	/** 
	 * app名称
	 **/
	public $title;
	
	/** 
	 * 开发者旺旺
	 **/
	public $wangwang;	
}
?>