<?php
/**
 * TOP API: taobao.tmc.errormessages.get request
 * 
 * @author auto create
 * @since 1.0, 2013.07.24
 */
class TmcErrormessagesGetRequest
{
	/** 
	 * 用户分组名称，不传表示获取默认分组的错误消息
	 **/
	private $groupName;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页获取消息的数量
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setGroupName($groupName)
	{
		$this->groupName = $groupName;
		$this->apiParas["group_name"] = $groupName;
	}

	public function getGroupName()
	{
		return $this->groupName;
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
		return "taobao.tmc.errormessages.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
