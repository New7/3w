<?php
/**
 * TOP API: alibaba.weather.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.13
 */
class AlibabaWeatherGetRequest
{
	/** 
	 * 城市名称
	 **/
	private $city;
	
	private $apiParas = array();
	
	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function getApiMethodName()
	{
		return "alibaba.weather.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->city,"city");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
