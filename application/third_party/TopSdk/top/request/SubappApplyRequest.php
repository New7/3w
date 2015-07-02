<?php
/**
 * TOP API: taobao.subapp.apply request
 * 
 * @author auto create
 * @since 1.0, 2014.09.04
 */
class SubappApplyRequest
{
	/** 
	 * 子应用回调地址，格式如：http://taobao.com/api/test/callback_url.jsp
	 **/
	private $callbackUrl;
	
	/** 
	 * 子应用通知地址，格式如：http://taobao.com/api/test/notify_url.jsp
	 **/
	private $notifyUrl;
	
	/** 
	 * 父应用的appkey
	 **/
	private $parentAppKey;
	
	/** 
	 * 子应用的标题，格式如：旺旺子应用
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setCallbackUrl($callbackUrl)
	{
		$this->callbackUrl = $callbackUrl;
		$this->apiParas["callback_url"] = $callbackUrl;
	}

	public function getCallbackUrl()
	{
		return $this->callbackUrl;
	}

	public function setNotifyUrl($notifyUrl)
	{
		$this->notifyUrl = $notifyUrl;
		$this->apiParas["notify_url"] = $notifyUrl;
	}

	public function getNotifyUrl()
	{
		return $this->notifyUrl;
	}

	public function setParentAppKey($parentAppKey)
	{
		$this->parentAppKey = $parentAppKey;
		$this->apiParas["parent_app_key"] = $parentAppKey;
	}

	public function getParentAppKey()
	{
		return $this->parentAppKey;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.subapp.apply";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->callbackUrl,"callbackUrl");
		RequestCheckUtil::checkNotNull($this->parentAppKey,"parentAppKey");
		RequestCheckUtil::checkNotNull($this->title,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
