<?php
/**
 * TOP API: taobao.topats.jushita.syncdata.delete request
 * 
 * @author auto create
 * @since 1.0, 2013.01.04
 */
class TopatsJushitaSyncdataDeleteRequest
{
	/** 
	 * 删除数据时间段的结束修改时间，格式为：yyyy-MM-dd HH:mm:ss，结束时间必须为前天的23:59:59秒以前。
	 **/
	private $endDate;
	
	/** 
	 * 删除数据时间段的起始修改时间，格式为：yyyy-MM-dd HH:mm:ss
	 **/
	private $startDate;
	
	/** 
	 * 推送的数据类型，可选值为：item, trade, refund，同时删除多种类型以分号分隔，如："item;trade;refund"
	 **/
	private $syncType;
	
	/** 
	 * 用户昵称，不填表示删除所有用户的数据。
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setSyncType($syncType)
	{
		$this->syncType = $syncType;
		$this->apiParas["sync_type"] = $syncType;
	}

	public function getSyncType()
	{
		return $this->syncType;
	}

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.jushita.syncdata.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
		RequestCheckUtil::checkNotNull($this->syncType,"syncType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
