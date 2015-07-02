<?php

/**
 * 地址信息
 * @author auto create
 */
class AddressInfo
{
	
	/** 
	 * 地址类型，可选值：0（经纬度）；1（POI地址）
	 **/
	public $flag;
	
	/** 
	 * 经度
	 **/
	public $latitude;
	
	/** 
	 * 纬度
	 **/
	public $longitude;
	
	/** 
	 * 详细地址
	 **/
	public $poi;	
}
?>