<?php
/**
 * TOP API: taobao.tmc.errormessages.confirm request
 * 
 * @author auto create
 * @since 1.0, 2013.07.24
 */
class TmcErrormessagesConfirmRequest
{
	/** 
	 * 用户分组名称，不传表示获取默认分组的错误消息
	 **/
	private $groupName;
	
	/** 
	 * 处理成功的消息ID列表
	 **/
	private $sMessageIds;
	
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

	public function setsMessageIds($sMessageIds)
	{
		$this->sMessageIds = $sMessageIds;
		$this->apiParas["s_message_ids"] = $sMessageIds;
	}

	public function getsMessageIds()
	{
		return $this->sMessageIds;
	}

	public function getApiMethodName()
	{
		return "taobao.tmc.errormessages.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sMessageIds,"sMessageIds");
		RequestCheckUtil::checkMaxListSize($this->sMessageIds,200,"sMessageIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
