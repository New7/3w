<?php
/**
 * TOP API: taobao.top.matrix.vm.put request
 * 
 * @author auto create
 * @since 1.0, 2013.01.24
 */
class TopMatrixVmPutRequest
{
	/** 
	 * JSON格式的数据
	 **/
	private $data;
	
	private $apiParas = array();
	
	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function getApiMethodName()
	{
		return "taobao.top.matrix.vm.put";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->data,"data");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
