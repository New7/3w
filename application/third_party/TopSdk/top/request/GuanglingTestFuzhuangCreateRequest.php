<?php
/**
 * TOP API: taobao.guangling.test.fuzhuang.create request
 * 
 * @author auto create
 * @since 1.0, 2015.06.09
 */
class GuanglingTestFuzhuangCreateRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.guangling.test.fuzhuang.create";
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
