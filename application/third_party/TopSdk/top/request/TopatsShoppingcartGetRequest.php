<?php
/**
 * TOP API: taobao.topats.shoppingcart.get request
 * 
 * @author auto create
 * @since 1.0, 2013.09.26
 */
class TopatsShoppingcartGetRequest
{
	/** 
	 * 购物车数据查询结束时间，格式yyyyMMdd，取值范围：前7天内~昨天，其中start_time<=end_time，如20120531相当于取加入购物车时间到2012-05-31 23:59:59为止的数据。注：如果start_time和end_time相同，表示取一天的购物车数据。
	 **/
	private $endTime;
	
	/** 
	 * 购物车数据查询开始时间，格式yyyyMMdd，取值范围：前7天内~昨天。如：20120501相当于取加入购物车时间从2012-05-01 00:00:00开始的数据。
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.shoppingcart.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
