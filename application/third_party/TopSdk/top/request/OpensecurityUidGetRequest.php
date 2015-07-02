<?php
/**
 * TOP API: taobao.opensecurity.uid.get request
 * 
 * @author auto create
 * @since 1.0, 2015.03.26
 */
class OpensecurityUidGetRequest
{
	/** 
	 * 淘宝用户ID
	 **/
	private $tbUserId;
	
	private $apiParas = array();
	
	public function setTbUserId($tbUserId)
	{
		$this->tbUserId = $tbUserId;
		$this->apiParas["tb_user_id"] = $tbUserId;
	}

	public function getTbUserId()
	{
		return $this->tbUserId;
	}

	public function getApiMethodName()
	{
		return "taobao.opensecurity.uid.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tbUserId,"tbUserId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
