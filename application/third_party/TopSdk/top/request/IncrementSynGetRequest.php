<?php
/**
 * TOP API: taobao.increment.syn.get request
 * 
 * @author auto create
 * @since 1.0, 2012.03.19
 */
class IncrementSynGetRequest
{
	/** 
	 * 查询订阅情况的appkey，如果appkey为空则查询所有的应用订阅情况。
	 **/
	private $isvAppKey;
	
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1,即返回第一页数据。
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数;最大值:200;默认值:40。
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setIsvAppKey($isvAppKey)
	{
		$this->isvAppKey = $isvAppKey;
		$this->apiParas["isv_app_key"] = $isvAppKey;
	}

	public function getIsvAppKey()
	{
		return $this->isvAppKey;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
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
		return "taobao.increment.syn.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,200,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
