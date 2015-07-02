<?php
/**
 * TOP API: alibaba.weather.water.get request
 * 
 * @author auto create
 * @since 1.0, 2015.03.16
 */
class AlibabaWeatherWaterGetRequest
{
	/** 
	 * 流域名称，查询流域为“长江流域”，则输入“长江流域”
	 **/
	private $river;
	
	private $apiParas = array();
	
	public function setRiver($river)
	{
		$this->river = $river;
		$this->apiParas["river"] = $river;
	}

	public function getRiver()
	{
		return $this->river;
	}

	public function getApiMethodName()
	{
		return "alibaba.weather.water.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->river,"river");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
