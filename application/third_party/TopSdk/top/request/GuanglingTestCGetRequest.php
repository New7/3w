<?php
/**
 * TOP API: taobao.guangling.test.c.get request
 * 
 * @author auto create
 * @since 1.0, 2015.06.09
 */
class GuanglingTestCGetRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $qimenRequest;
	
	private $apiParas = array();
	
	public function setQimenRequest($qimenRequest)
	{
		$this->qimenRequest = $qimenRequest;
		$this->apiParas["qimen_request"] = $qimenRequest;
	}

	public function getQimenRequest()
	{
		return $this->qimenRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.guangling.test.c.get";
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
