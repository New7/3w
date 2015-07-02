<?php
/**
 * TOP API: taobao.topats.history.trades.get request
 * 
 * @author auto create
 * @since 1.0, 2012.06.01
 */
class TopatsHistoryTradesGetRequest
{
	/** 
	 * 查询订单月份，范围:200808~当前月的前一个月
	 **/
	private $month;
	
	private $apiParas = array();
	
	public function setMonth($month)
	{
		$this->month = $month;
		$this->apiParas["month"] = $month;
	}

	public function getMonth()
	{
		return $this->month;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.history.trades.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->month,"month");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
