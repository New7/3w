<?php
/**
 * TOP API: taobao.topats.increment.syn.init request
 * 
 * @author auto create
 * @since 1.0, 2012.10.18
 */
class TopatsIncrementSynInitRequest
{
	/** 
	 * 需要初始化同步服务用户数据的appkey。
	 **/
	private $isvAppKey;
	
	/** 
	 * 指定初始开通的用户昵称列表。如果此值为空，则开通所有session有效的用户。
	 **/
	private $nicks;
	
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

	public function setNicks($nicks)
	{
		$this->nicks = $nicks;
		$this->apiParas["nicks"] = $nicks;
	}

	public function getNicks()
	{
		return $this->nicks;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.increment.syn.init";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isvAppKey,"isvAppKey");
		RequestCheckUtil::checkMaxListSize($this->nicks,100,"nicks");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
