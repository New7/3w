<?php
/**
 * TOP API: taobao.shipping.addresses.get.page request
 * 
 * @author auto create
 * @since 1.0, 2014.09.04
 */
class ShippingAddressesGetPageRequest
{
	/** 
	 * 当top检测到用户未登录时跳转的url（此url的域名必须在白名单里）
	 **/
	private $callbackRul;
	
	/** 
	 * 这个参数是用来指定当用户选定收货地址后，提交数据到b2c网站的页面
	 **/
	private $receiveUrl;
	
	private $apiParas = array();
	
	public function setCallbackRul($callbackRul)
	{
		$this->callbackRul = $callbackRul;
		$this->apiParas["callback_rul"] = $callbackRul;
	}

	public function getCallbackRul()
	{
		return $this->callbackRul;
	}

	public function setReceiveUrl($receiveUrl)
	{
		$this->receiveUrl = $receiveUrl;
		$this->apiParas["receive_url"] = $receiveUrl;
	}

	public function getReceiveUrl()
	{
		return $this->receiveUrl;
	}

	public function getApiMethodName()
	{
		return "taobao.shipping.addresses.get.page";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->receiveUrl,"receiveUrl");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
