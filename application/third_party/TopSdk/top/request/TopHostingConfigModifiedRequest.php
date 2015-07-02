<?php
/**
 * TOP API: taobao.top.hosting.config.modified request
 * 
 * @author auto create
 * @since 1.0, 2011.08.25
 */
class TopHostingConfigModifiedRequest
{
	/** 
	 * 指定的isv的app_key
	 **/
	private $isvAppKey;
	
	/** 
	 * 消息编号，同一appkey下的msg_no不允许重复
	 **/
	private $msgNo;
	
	private $apiParas = array();
	
	public function setIsvAppKey($isvAppKey)
	{
		$this->isvAppKey = $isvAppKey;
		$this->apiParas["isv_app_key"] = $isvAppKey;
	}

	public function getIsvAppKey()
	{
		return $this->isvAppKey;
	}

	public function setMsgNo($msgNo)
	{
		$this->msgNo = $msgNo;
		$this->apiParas["msg_no"] = $msgNo;
	}

	public function getMsgNo()
	{
		return $this->msgNo;
	}

	public function getApiMethodName()
	{
		return "taobao.top.hosting.config.modified";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isvAppKey,"isvAppKey");
		RequestCheckUtil::checkMaxLength($this->isvAppKey,20,"isvAppKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
