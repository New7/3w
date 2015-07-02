<?php
/**
 * TOP API: taobao.notify.msg.confirm request
 * 
 * @author auto create
 * @since 1.0, 2013.04.11
 */
class NotifyMsgConfirmRequest
{
	/** 
	 * 须确认的Id号
	 **/
	private $confirmIds;
	
	/** 
	 * 消息组id
	 **/
	private $groupId;
	
	private $apiParas = array();
	
	public function setConfirmIds($confirmIds)
	{
		$this->confirmIds = $confirmIds;
		$this->apiParas["confirm_ids"] = $confirmIds;
	}

	public function getConfirmIds()
	{
		return $this->confirmIds;
	}

	public function setGroupId($groupId)
	{
		$this->groupId = $groupId;
		$this->apiParas["group_id"] = $groupId;
	}

	public function getGroupId()
	{
		return $this->groupId;
	}

	public function getApiMethodName()
	{
		return "taobao.notify.msg.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->confirmIds,"confirmIds");
		RequestCheckUtil::checkMaxListSize($this->confirmIds,50,"confirmIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
