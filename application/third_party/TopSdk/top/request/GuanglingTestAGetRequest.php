<?php
/**
 * TOP API: taobao.guangling.test.a.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.21
 */
class GuanglingTestAGetRequest
{
	/** 
	 * 2
	 **/
	private $name;
	
	/** 
	 * a
	 **/
	private $other;
	
	/** 
	 * 1
	 **/
	private $sex;
	
	/** 
	 * a
	 **/
	private $unnamed;
	
	/** 
	 * 1
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setOther($other)
	{
		$this->other = $other;
		$this->apiParas["other"] = $other;
	}

	public function getOther()
	{
		return $this->other;
	}

	public function setSex($sex)
	{
		$this->sex = $sex;
		$this->apiParas["sex"] = $sex;
	}

	public function getSex()
	{
		return $this->sex;
	}

	public function setUnnamed($unnamed)
	{
		$this->unnamed = $unnamed;
		$this->apiParas["unnamed"] = $unnamed;
	}

	public function getUnnamed()
	{
		return $this->unnamed;
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
		return "taobao.guangling.test.a.get";
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
