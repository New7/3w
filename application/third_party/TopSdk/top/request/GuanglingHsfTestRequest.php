<?php
/**
 * TOP API: taobao.guangling.hsf.test request
 * 
 * @author auto create
 * @since 1.0, 2015.06.18
 */
class GuanglingHsfTestRequest
{
	/** 
	 * 1
	 **/
	private $extendPams;
	
	/** 
	 * 1
	 **/
	private $idType;
	
	/** 
	 * 1
	 **/
	private $isvId;
	
	/** 
	 * 1
	 **/
	private $ocrmAppKey;
	
	/** 
	 * 1
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setExtendPams($extendPams)
	{
		$this->extendPams = $extendPams;
		$this->apiParas["extend_pams"] = $extendPams;
	}

	public function getExtendPams()
	{
		return $this->extendPams;
	}

	public function setIdType($idType)
	{
		$this->idType = $idType;
		$this->apiParas["id_type"] = $idType;
	}

	public function getIdType()
	{
		return $this->idType;
	}

	public function setIsvId($isvId)
	{
		$this->isvId = $isvId;
		$this->apiParas["isv_id"] = $isvId;
	}

	public function getIsvId()
	{
		return $this->isvId;
	}

	public function setOcrmAppKey($ocrmAppKey)
	{
		$this->ocrmAppKey = $ocrmAppKey;
		$this->apiParas["ocrm_app_key"] = $ocrmAppKey;
	}

	public function getOcrmAppKey()
	{
		return $this->ocrmAppKey;
	}

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
		return "taobao.guangling.hsf.test";
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
