<?php
/**
 * TOP API: taobao.guangling.test.speed.get request
 * 
 * @author auto create
 * @since 1.0, 2015.02.10
 */
class GuanglingTestSpeedGetRequest
{
	/** 
	 * 姓名
	 **/
	private $name;
	
	/** 
	 * 保留字段
	 **/
	private $other;
	
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

	public function getApiMethodName()
	{
		return "taobao.guangling.test.speed.get";
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
