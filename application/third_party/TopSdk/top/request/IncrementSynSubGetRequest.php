<?php
/**
 * TOP API: taobao.increment.syn.sub.get request
 * 
 * @author auto create
 * @since 1.0, 2012.03.19
 */
class IncrementSynSubGetRequest
{
	/** 
	 * 查询同步应用的用户编号
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.increment.syn.sub.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userId,"userId");
		RequestCheckUtil::checkMinValue($this->userId,0,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
