<?php
/**
 * TOP API: taobao.app.subapp.apply request
 * 
 * @author auto create
 * @since 1.0, 2011.08.25
 */
class AppSubappApplyRequest
{
	/** 
	 * 子应用回调地址，主要用于获取SessionKey等回调参数。比如：http://taobao.com/api/test/callback_url.jsp
	 **/
	private $callbackUrl;
	
	/** 
	 * 子应用图标，支持JPG，PNG，GIF格式，大小不超过100KB
	 **/
	private $logo;
	
	/** 
	 * 子应用通知地址，主要用于接收TOP Notify API的调用，目前暂时还用不到。比如：http://taobao.com/api/test/notify_url.jsp
	 **/
	private $notifyUrl;
	
	/** 
	 * 父应用的appkey
	 **/
	private $parentAppKey;
	
	/** 
	 * 申请子应用需要用户开通的服务码。比如：APP_SERVICE_SHOPEX（ShopEx店掌柜独立网店系统）
	 **/
	private $serviceCode;
	
	/** 
	 * 子应用的标题，最大长度为24个字节。比如：旺旺子应用
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

	public function setLogo($logo)
	{
		$this->logo = $logo;
		$this->apiParas["logo"] = $logo;
	}

	public function getLogo()
	{
		return $this->logo;
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

	public function setServiceCode($serviceCode)
	{
		$this->serviceCode = $serviceCode;
		$this->apiParas["service_code"] = $serviceCode;
	}

	public function getServiceCode()
	{
		return $this->serviceCode;
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
		return "taobao.app.subapp.apply";
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
