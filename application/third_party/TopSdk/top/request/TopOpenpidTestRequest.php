<?php
/**
 * TOP API: taobao.top.openpid.test request
 * 
 * @author auto create
 * @since 1.0, 2015.05.07
 */
class TopOpenpidTestRequest
{
	/** 
	 * isvId
	 **/
	private $isvId;
	
	/** 
	 * 
	 **/
	private $unNamed;
	
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

	public function setUnNamed($unNamed)
	{
		$this->unNamed = $unNamed;
		$this->apiParas["un_named"] = $unNamed;
	}

	public function getUnNamed()
	{
		return $this->unNamed;
	}

	public function getApiMethodName()
	{
		return "taobao.top.openpid.test";
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
