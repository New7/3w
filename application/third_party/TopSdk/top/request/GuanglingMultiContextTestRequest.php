<?php
/**
 * TOP API: taobao.guangling.multi.context.test request
 * 
 * @author auto create
 * @since 1.0, 2015.04.21
 */
class GuanglingMultiContextTestRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $unnamed;
	
	private $apiParas = array();
	
	public function setUnnamed($unnamed)
	{
		$this->unnamed = $unnamed;
		$this->apiParas["unnamed"] = $unnamed;
	}

	public function getUnnamed()
	{
		return $this->unnamed;
	}

	public function getApiMethodName()
	{
		return "taobao.guangling.multi.context.test";
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
