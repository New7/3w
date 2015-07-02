<?php
/**
 * TOP API: taobao.topats.shop.waplog.get request
 * 
 * @author auto create
 * @since 1.0, 2013.09.26
 */
class TopatsShopWaplogGetRequest
{
	/** 
	 * 需要获取流量数据的日期，格式为：yyyyMMdd，取值范围：前7天内~今天
	 **/
	private $day;
	
	private $apiParas = array();
	
	public function setDay($day)
	{
		$this->day = $day;
		$this->apiParas["day"] = $day;
	}

	public function getDay()
	{
		return $this->day;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.shop.waplog.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->day,"day");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
