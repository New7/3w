<?php
/**
 * TOP API: taobao.jushita.syncdata.delete request
 * 
 * @author auto create
 * @since 1.0, 2012.10.26
 */
class JushitaSyncdataDeleteRequest
{
	/** 
	 * 删除数据时间段的结束时间(时间段是modified时间)
	 **/
	private $endDate;
	
	/** 
	 * 删除数据时间段的起始时间(时间段是modified时间)
	 **/
	private $startDate;
	
	/** 
	 * 推送的数据类型，目前支持item，trade，refund，多个以分号分隔，如："item;trade;refund"
	 **/
	private $syncType;
	
	/** 
	 * 用户昵称
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
		return "taobao.jushita.syncdata.delete";
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
