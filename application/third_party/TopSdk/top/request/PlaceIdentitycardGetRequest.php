<?php
/**
 * TOP API: taobao.place.identitycard.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.13
 */
class PlaceIdentitycardGetRequest
{
	/** 
	 * 身份证号码
	 **/
	private $cardno;
	
	private $apiParas = array();
	
	public function setCardno($cardno)
	{
		$this->cardno = $cardno;
		$this->apiParas["cardno"] = $cardno;
	}

	public function getCardno()
	{
		return $this->cardno;
	}

	public function getApiMethodName()
	{
		return "taobao.place.identitycard.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cardno,"cardno");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
