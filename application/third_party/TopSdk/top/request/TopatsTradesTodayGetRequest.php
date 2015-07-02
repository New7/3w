<?php
/**
 * TOP API: taobao.topats.trades.today.get request
 * 
 * @author auto create
 * @since 1.0, 2013.10.18
 */
class TopatsTradesTodayGetRequest
{
	/** 
	 * 订单创建的结束时间，格式yyyy-MM-dd HH:mm:ss，其中start_created < end_created < 当前时间。
	 **/
	private $endCreated;
	
	/** 
	 * taobao.trade.fullinfo.get允许返回的所有字段。
	 **/
	private $fields;
	
	/** 
	 * 订单创建的开始时间，格式yyyy-MM-dd HH:mm:ss，最早从今天的零点零分零秒开始。
	 **/
	private $startCreated;
	
	private $apiParas = array();
	
	public function setEndCreated($endCreated)
	{
		$this->endCreated = $endCreated;
		$this->apiParas["end_created"] = $endCreated;
	}

	public function getEndCreated()
	{
		return $this->endCreated;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setStartCreated($startCreated)
	{
		$this->startCreated = $startCreated;
		$this->apiParas["start_created"] = $startCreated;
	}

	public function getStartCreated()
	{
		return $this->startCreated;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.trades.today.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endCreated,"endCreated");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->startCreated,"startCreated");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
