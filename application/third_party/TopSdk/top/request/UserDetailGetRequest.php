<?php
/**
 * TOP API: taobao.user.detail.get request
 * 
 * @author auto create
 * @since 1.0, 2014.09.04
 */
class UserDetailGetRequest
{
	/** 
	 * 支付宝账户
	 **/
	private $alipayNo;
	
	/** 
	 * 需返回的字段列表。可选值：User结构体中的所有字段,增加隐私字段:location.address,real_name,phone,mobile,email；以半角逗号(,)分隔。
	 **/
	private $fields;
	
	/** 
	 * 用户昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setAlipayNo($alipayNo)
	{
		$this->alipayNo = $alipayNo;
		$this->apiParas["alipay_no"] = $alipayNo;
	}

	public function getAlipayNo()
	{
		return $this->alipayNo;
	}

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
		return "taobao.user.detail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
