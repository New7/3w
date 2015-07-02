<?php
/**
 * TOP API: taobao.user.property.query request
 * 
 * @author auto create
 * @since 1.0, 2014.09.04
 */
class UserPropertyQueryRequest
{
	/** 
	 * 用户昵称
	 **/
	private $nick;
	
	/** 
	 * 登录淘宝网时生成的随机数.由我的淘宝在向ISV应用请求页面时附在url参数中传递过去，ISV应用使用trackid和nick同时进行查询，以满足未登录时保存的记录也可以被查到
	 **/
	private $trackid;
	
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setTrackid($trackid)
	{
		$this->trackid = $trackid;
		$this->apiParas["trackid"] = $trackid;
	}

	public function getTrackid()
	{
		return $this->trackid;
	}

	public function getApiMethodName()
	{
		return "taobao.user.property.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkNotNull($this->trackid,"trackid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
