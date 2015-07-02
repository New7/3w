<?php
/**
 * TOP API: taobao.tmc.users.get request
 * 
 * @author auto create
 * @since 1.0, 2013.09.09
 */
class TmcUsersGetRequest
{
	/** 
	 * 需返回的字段列表，多个字段以半角逗号分隔。可选值：TmcUser结构体中的所有字段（topics除外）
	 **/
	private $fields;
	
	/** 
	 * 查询有效/失效用户，默认查询所有用户
	 **/
	private $isValid;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页返回多少记录
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setIsValid($isValid)
	{
		$this->isValid = $isValid;
		$this->apiParas["is_valid"] = $isValid;
	}

	public function getIsValid()
	{
		return $this->isValid;
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
		return "taobao.tmc.users.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
