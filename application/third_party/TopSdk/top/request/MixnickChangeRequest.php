<?php
/**
 * TOP API: taobao.mixnick.change request
 * 
 * @author auto create
 * @since 1.0, 2015.03.03
 */
class MixnickChangeRequest
{
	/** 
	 * 输入的appkey
	 **/
	private $srcAppkey;
	
	/** 
	 * 输入的混淆nick
	 **/
	private $srcMixNick;
	
	private $apiParas = array();
	
	public function setSrcAppkey($srcAppkey)
	{
		$this->srcAppkey = $srcAppkey;
		$this->apiParas["src_appkey"] = $srcAppkey;
	}

	public function getSrcAppkey()
	{
		return $this->srcAppkey;
	}

	public function setSrcMixNick($srcMixNick)
	{
		$this->srcMixNick = $srcMixNick;
		$this->apiParas["src_mix_nick"] = $srcMixNick;
	}

	public function getSrcMixNick()
	{
		return $this->srcMixNick;
	}

	public function getApiMethodName()
	{
		return "taobao.mixnick.change";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->srcAppkey,"srcAppkey");
		RequestCheckUtil::checkNotNull($this->srcMixNick,"srcMixNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
