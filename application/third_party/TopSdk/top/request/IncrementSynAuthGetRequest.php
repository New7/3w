<?php
/**
 * TOP API: taobao.increment.syn.auth.get request
 * 
 * @author auto create
 * @since 1.0, 2012.08.31
 */
class IncrementSynAuthGetRequest
{
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1,即返回第一页数据。
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数;最大值:200;默认值:40。
	 **/
	private $pageSize;
	
	/** 
	 * 同步应用的appkey。标志查询的应用。
	 **/
	private $synAppKey;
	
	private $apiParas = array();
	
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

	public function setSynAppKey($synAppKey)
	{
		$this->synAppKey = $synAppKey;
		$this->apiParas["syn_app_key"] = $synAppKey;
	}

	public function getSynAppKey()
	{
		return $this->synAppKey;
	}

	public function getApiMethodName()
	{
		return "taobao.increment.syn.auth.get";
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
		RequestCheckUtil::checkNotNull($this->synAppKey,"synAppKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
