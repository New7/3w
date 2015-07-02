<?php
/**
 * TOP API: taobao.opensecurity.isv.uid.get request
 * 
 * @author auto create
 * @since 1.0, 2015.03.26
 */
class OpensecurityIsvUidGetRequest
{
	/** 
	 * 基于Appkey生成的open security淘宝用户Id
	 **/
	private $openUid;
	
	private $apiParas = array();
	
	public function setOpenUid($openUid)
	{
		$this->openUid = $openUid;
		$this->apiParas["open_uid"] = $openUid;
	}

	public function getOpenUid()
	{
		return $this->openUid;
	}

	public function getApiMethodName()
	{
		return "taobao.opensecurity.isv.uid.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->openUid,"openUid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
