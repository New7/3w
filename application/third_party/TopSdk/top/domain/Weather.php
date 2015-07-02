<?php

/**
 * 天气预报信息
 * @author auto create
 */
class Weather
{
	
	/** 
	 * 城市名称
	 **/
	public $city;
	
	/** 
	 * 更新日期
	 **/
	public $date;
	
	/** 
	 * 湿度
	 **/
	public $humidity;
	
	/** 
	 * 温度
	 **/
	public $temperature;
	
	/** 
	 * 更新时间
	 **/
	public $time;
	
	/** 
	 * 天气描述
	 **/
	public $weatherDesc;
	
	/** 
	 * 天气标识，如：00（晴），53（霾）
	 **/
	public $weatherIds;
	
	/** 
	 * 星期
	 **/
	public $week;
	
	/** 
	 * 风向及风力
	 **/
	public $wind;
	
	/** 
	 * 风向
	 **/
	public $windDirection;
	
	/** 
	 * 风力
	 **/
	public $windStrength;	
}
?>