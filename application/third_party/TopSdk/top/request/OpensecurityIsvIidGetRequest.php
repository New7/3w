<?php
/**
 * TOP API: taobao.opensecurity.isv.iid.get request
 * 
 * @author auto create
 * @since 1.0, 2015.03.23
 */
class OpensecurityIsvIidGetRequest
{
	/** 
	 * 基于Appkey生成的open security商品Id
	 **/
	private $openIid;
	
	private $apiParas = array();
	
	public function setOpenIid($openIid)
	{
		$this->openIid = $openIid;
		$this->apiParas["open_iid"] = $openIid;
	}

	public function getOpenIid()
	{
		return $this->openIid;
	}

	public function getApiMethodName()
	{
		return "taobao.opensecurity.isv.iid.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->openIid,"openIid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
