<?php
/**
 * TOP API: taobao.openuid.change request
 * 
 * @author auto create
 * @since 1.0, 2014.10.09
 */
class OpenuidChangeRequest
{
	/** 
	 * 老的taobao_open_id
	 **/
	private $oldOpenId;
	
	private $apiParas = array();
	
	public function setOldOpenId($oldOpenId)
	{
		$this->oldOpenId = $oldOpenId;
		$this->apiParas["old_open_id"] = $oldOpenId;
	}

	public function getOldOpenId()
	{
		return $this->oldOpenId;
	}

	public function getApiMethodName()
	{
		return "taobao.openuid.change";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->oldOpenId,"oldOpenId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
