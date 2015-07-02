<?php
/**
 * TOP API: taobao.opensecurity.uid.change request
 * 
 * @author auto create
 * @since 1.0, 2015.03.26
 */
class OpensecurityUidChangeRequest
{
	/** 
	 * 基于isv生成的open security 淘宝用户id
	 **/
	private $openUidIsv;
	
	private $apiParas = array();
	
	public function setOpenUidIsv($openUidIsv)
	{
		$this->openUidIsv = $openUidIsv;
		$this->apiParas["open_uid_isv"] = $openUidIsv;
	}

	public function getOpenUidIsv()
	{
		return $this->openUidIsv;
	}

	public function getApiMethodName()
	{
		return "taobao.opensecurity.uid.change";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->openUidIsv,"openUidIsv");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
