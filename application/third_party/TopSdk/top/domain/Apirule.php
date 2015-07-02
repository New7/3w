<?php

/**
 * api请求规则
 * @author auto create
 */
class Apirule
{
	
	/** 
	 * api名称
	 **/
	public $apiName;
	
	/** 
	 * api请求参数具体规则结构
	 **/
	public $apiruleParameters;
	
	/** 
	 * api请求参数规则最后修改时间
	 **/
	public $lastModified;
	
	/** 
	 * 是否需要session（即登录）
	 **/
	public $needSession;	
}
?>