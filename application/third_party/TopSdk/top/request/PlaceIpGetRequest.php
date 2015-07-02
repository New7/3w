<?php
/**
 * TOP API: taobao.place.ip.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.13
 */
class PlaceIpGetRequest
{
	/** 
	 * 需要查询的IP地址或域名
	 **/
	private $ip;
	
	private $apiParas = array();
	
	public function setIp($ip)
	{
		$this->ip = $ip;
		$this->apiParas["ip"] = $ip;
	}

	public function getIp()
	{
		return $this->ip;
	}

	public function getApiMethodName()
	{
		return "taobao.place.ip.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
