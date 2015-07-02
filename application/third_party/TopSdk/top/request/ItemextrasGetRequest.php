<?php
/**
 * TOP API: taobao.itemextras.get request
 * 
 * @author auto create
 * @since 1.0, 2011.08.25
 */
class ItemextrasGetRequest
{
	/** 
	 * 商品上传后的状态。可选值:
onsale(出售中)
instock(库存中)
	 **/
	private $approveStatus;
	
	/** 
	 * 需要返回的商品扩展对象字段，商品扩展结构体 ItemExtra中所有字段均可返回,多个字段用','分割
	 **/
	private $fields;
	
	/** 
	 * 商品发布者昵称
	 **/
	private $nick;
	
	/** 
	 * 上架时间排序。格式为column:asc/desc。可选值:
list_time:asc
list_time:desc
默认值：list_time:desc
	 **/
	private $orderBy;
	
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数; 默认值:40;最大值:100
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setApproveStatus($approveStatus)
	{
		$this->approveStatus = $approveStatus;
		$this->apiParas["approve_status"] = $approveStatus;
	}

	public function getApproveStatus()
	{
		return $this->approveStatus;
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

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
		$this->apiParas["order_by"] = $orderBy;
	}

	public function getOrderBy()
	{
		return $this->orderBy;
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
		return "taobao.itemextras.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->approveStatus,"approveStatus");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
