<?php
/**
 * TOP API: taobao.opensecurity.iid.change request
 * 
 * @author auto create
 * @since 1.0, 2015.03.23
 */
class OpensecurityIidChangeRequest
{
	/** 
	 * 基于isv生成的open security 商品id
	 **/
	private $openIidIsv;
	
	private $apiParas = array();
	
	public function setOpenIidIsv($openIidIsv)
	{
		$this->openIidIsv = $openIidIsv;
		$this->apiParas["open_iid_isv"] = $openIidIsv;
	}

	public function getOpenIidIsv()
	{
		return $this->openIidIsv;
	}

	public function getApiMethodName()
	{
		return "taobao.opensecurity.iid.change";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->openIidIsv,"openIidIsv");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
