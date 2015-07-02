<?php
/**
 * TOP API: taobao.increment.user.authorize request
 * 
 * @author auto create
 * @since 1.0, 2012.04.09
 */
class IncrementUserAuthorizeRequest
{
	/** 
	 * 授权用户的邮件地址。
	 **/
	private $email;
	
	private $apiParas = array();
	
	public function setEmail($email)
	{
		$this->email = $email;
		$this->apiParas["email"] = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getApiMethodName()
	{
		return "taobao.increment.user.authorize";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
