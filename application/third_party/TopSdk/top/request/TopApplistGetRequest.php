<?php
/**
 * TOP API: taobao.top.applist.get request
 * 
 * @author auto create
 * @since 1.0, 2015.01.27
 */
class TopApplistGetRequest
{
	/** 
	 * isv user id
	 **/
	private $isvId;
	
	private $apiParas = array();
	
	public function setIsvId($isvId)
	{
		$this->isvId = $isvId;
		$this->apiParas["isv_id"] = $isvId;
	}

	public function getIsvId()
	{
		return $this->isvId;
	}

	public function getApiMethodName()
	{
		return "taobao.top.applist.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
