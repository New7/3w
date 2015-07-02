<?php

/**
 * API信息
 * @author auto create
 */
class ApiSyncInfo
{
	
	/** 
	 * API入参列表
	 **/
	public $apiReqParams;
	
	/** 
	 * 后台类目名称
	 **/
	public $bgCatName;
	
	/** 
	 * 后台类目ID
	 **/
	public $bgCategoryId;
	
	/** 
	 * 前台类目ID
	 **/
	public $categoryId;
	
	/** 
	 * 定义文件内容
	 **/
	public $defineFileContent;
	
	/** 
	 * api描述
	 **/
	public $description;
	
	/** 
	 * 是否是新流程api
	 **/
	public $isNewProcess;
	
	/** 
	 * api对应的标签
	 **/
	public $labelList;
	
	/** 
	 * mapping映射文件
	 **/
	public $mappingFileContent;
	
	/** 
	 * API名称
	 **/
	public $name;
	
	/** 
	 * 服务方法名称
	 **/
	public $serviceMethod;
	
	/** 
	 * 服务名称
	 **/
	public $serviceName;
	
	/** 
	 * 服务方法名称
	 **/
	public $serviceVersion;
	
	/** 
	 * 是否需要登录。NO_NEED(不需用户授权),REQUIRED(必须用户授权),OPTIONAL(可选用户授权),BI_SESSIONS(双方用户授权)
	 **/
	public $sessionBindingType;	
}
?>