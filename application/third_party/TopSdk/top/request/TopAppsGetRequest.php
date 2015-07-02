<?php
/**
 * TOP API: taobao.top.apps.get request
 * 
 * @author auto create
 * @since 1.0, 2014.09.04
 */
class TopAppsGetRequest
{
	/** 
	 * 上线结束时间
	 **/
	private $currentOnlineEndTime;
	
	/** 
	 * 上线开始时间
	 **/
	private $currentOnlineStartTime;
	
	/** 
	 * 当前页码
	 **/
	private $currentPage;
	
	/** 
	 * 每页返回记录数
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setCurrentOnlineEndTime($currentOnlineEndTime)
	{
		$this->currentOnlineEndTime = $currentOnlineEndTime;
		$this->apiParas["current_online_end_time"] = $currentOnlineEndTime;
	}

	public function getCurrentOnlineEndTime()
	{
		return $this->currentOnlineEndTime;
	}

	public function setCurrentOnlineStartTime($currentOnlineStartTime)
	{
		$this->currentOnlineStartTime = $currentOnlineStartTime;
		$this->apiParas["current_online_start_time"] = $currentOnlineStartTime;
	}

	public function getCurrentOnlineStartTime()
	{
		return $this->currentOnlineStartTime;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function getApiMethodName()
	{
		return "taobao.top.apps.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->currentOnlineEndTime,"currentOnlineEndTime");
		RequestCheckUtil::checkNotNull($this->currentOnlineStartTime,"currentOnlineStartTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
