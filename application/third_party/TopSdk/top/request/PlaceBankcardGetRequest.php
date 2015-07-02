<?php
/**
 * TOP API: taobao.place.bankcard.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.13
 */
class PlaceBankcardGetRequest
{
	/** 
	 * 银行卡号
	 **/
	private $card;
	
	private $apiParas = array();
	
	public function setCard($card)
	{
		$this->card = $card;
		$this->apiParas["card"] = $card;
	}

	public function getCard()
	{
		return $this->card;
	}

	public function getApiMethodName()
	{
		return "taobao.place.bankcard.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->card,"card");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
