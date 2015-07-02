<?php
/**
 * TOP API: taobao.user.qianniu.get request
 * 
 * @author auto create
 * @since 1.0, 2014.09.04
 */
class UserQianniuGetRequest
{
	/** 
	 * 需返回的字段列表。可选值：User结构体中的所有字段；以半角逗号(,)分隔。需要用户授权才能获取用户对应的uid和user_id。
	 **/
	private $fields;
	
	/** 
	 * 用户昵称，如果昵称为中文，请使用UTF-8字符集对昵称进行URL编码。
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function getApiMethodName()
	{
		return "taobao.user.qianniu.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
