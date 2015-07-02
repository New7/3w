<?php
/**
 * TOP API: taobao.topats.shoplog.get request
 * 
 * @author auto create
 * @since 1.0, 2012.12.07
 */
class TopatsShoplogGetRequest
{
	/** 
	 * 需要获取访问日志的日期，格式为：yyyyMMdd，取值范围：前7天内~昨天
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
		return "taobao.topats.shoplog.get";
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
