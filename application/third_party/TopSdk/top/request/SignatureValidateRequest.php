<?php
/**
 * TOP API: taobao.signature.validate request
 * 
 * @author auto create
 * @since 1.0, 2015.06.09
 */
class SignatureValidateRequest
{
	/** 
	 * 签名算法，可选值：HmacMD5, HmacSHA1
	 **/
	private $algorithm;
	
	/** 
	 * 待签名的请求体，最大5M
	 **/
	private $body;
	
	/** 
	 * 字节流编码方式，可选值：utf-8, gbk
	 **/
	private $charset;
	
	/** 
	 * ISV的AppKey
	 **/
	private $proxyAppKey;
	
	/** 
	 * 待验证的签名
	 **/
	private $signature;
	
	private $apiParas = array();
	
	public function setAlgorithm($algorithm)
	{
		$this->algorithm = $algorithm;
		$this->apiParas["algorithm"] = $algorithm;
	}

	public function getAlgorithm()
	{
		return $this->algorithm;
	}

	public function setBody($body)
	{
		$this->body = $body;
		$this->apiParas["body"] = $body;
	}

	public function getBody()
	{
		return $this->body;
	}

	public function setCharset($charset)
	{
		$this->charset = $charset;
		$this->apiParas["charset"] = $charset;
	}

	public function getCharset()
	{
		return $this->charset;
	}

	public function setProxyAppKey($proxyAppKey)
	{
		$this->proxyAppKey = $proxyAppKey;
		$this->apiParas["proxy_app_key"] = $proxyAppKey;
	}

	public function getProxyAppKey()
	{
		return $this->proxyAppKey;
	}

	public function setSignature($signature)
	{
		$this->signature = $signature;
		$this->apiParas["signature"] = $signature;
	}

	public function getSignature()
	{
		return $this->signature;
	}

	public function getApiMethodName()
	{
		return "taobao.signature.validate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->body,"body");
		RequestCheckUtil::checkNotNull($this->proxyAppKey,"proxyAppKey");
		RequestCheckUtil::checkNotNull($this->signature,"signature");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
