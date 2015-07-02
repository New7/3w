<?php
/**
 * TOP API: taobao.guangling.test.cainiao.get request
 * 
 * @author auto create
 * @since 1.0, 2015.01.16
 */
class GuanglingTestCainiaoGetRequest
{
	/** 
	 * 111
	 **/
	private $age;
	
	/** 
	 * 111
	 **/
	private $content;
	
	private $apiParas = array();
	
	public function setAge($age)
	{
		$this->age = $age;
		$this->apiParas["age"] = $age;
	}

	public function getAge()
	{
		return $this->age;
	}

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function getApiMethodName()
	{
		return "taobao.guangling.test.cainiao.get";
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
