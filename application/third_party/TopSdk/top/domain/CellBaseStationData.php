<?php

/**
 * 移动基站的结果数据
 * @author auto create
 */
class CellBaseStationData
{
	
	/** 
	 * 地址
	 **/
	public $address;
	
	/** 
	 * 纬度
	 **/
	public $lat;
	
	/** 
	 * 经度
	 **/
	public $lng;
	
	/** 
	 * 移动国家码
	 **/
	public $mcc;
	
	/** 
	 * 移动设备网络代码
	 **/
	public $mnc;
	
	/** 
	 * 纠偏后的纬度（用于google地图显示）
	 **/
	public $oLat;
	
	/** 
	 * 纠偏后的经度（用于google地图显示）
	 **/
	public $oLng;
	
	/** 
	 * 基站信号覆盖范围（单位：米，半径）
	 **/
	public $precision;	
}
?>