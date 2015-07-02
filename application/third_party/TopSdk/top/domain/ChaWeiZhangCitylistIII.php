<?php

/**
 * 地区列表
 * @author auto create
 */
class ChaWeiZhangCitylistIII
{
	
	/** 
	 * 地区唯一标识，用于调用查询违章接口
	 **/
	public $apikey;
	
	/** 
	 * 主键
	 **/
	public $cid;
	
	/** 
	 * 地区名称
	 **/
	public $name;
	
	/** 
	 * 是否需要验证码
	 **/
	public $needcap;
	
	/** 
	 * 指定需要的查询参数
	 **/
	public $params;
	
	/** 
	 * 子级列表
	 **/
	public $subcities;	
}
?>