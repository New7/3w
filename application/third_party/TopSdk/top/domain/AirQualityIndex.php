<?php

/**
 * 空气质量指数（Air Quality Index，简称AQI）是定量描述空气质量状况的无量纲指数。
 * @author auto create
 */
class AirQualityIndex
{
	
	/** 
	 * 空气质量指数
	 **/
	public $aqi;
	
	/** 
	 * 城市名称
	 **/
	public $city;
	
	/** 
	 * 时间日期
	 **/
	public $date;
	
	/** 
	 * 室内气温
	 **/
	public $iat;
	
	/** 
	 * 物离子浓度
	 **/
	public $ion;
	
	/** 
	 * PM10指数（每小时）
	 **/
	public $pm10Hour;
	
	/** 
	 * PM2.5指数（每天）
	 **/
	public $pm25Day;
	
	/** 
	 * PM2.5指数（每小时）
	 **/
	public $pm25Hour;
	
	/** 
	 * 空气质量
	 **/
	public $quality;
	
	/** 
	 * 监测点
	 **/
	public $site;	
}
?>