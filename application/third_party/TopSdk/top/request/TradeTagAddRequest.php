<?php
/**
 * TOP API: taobao.trade.tag.add request
 * 
 * @author auto create
 * @since 1.0, 2011.08.25
 */
class TradeTagAddRequest
{
	/** 
	 * 支付宝证书序列号。当买家的支付宝证书同时绑定在多个地方使用时此参数必传，用来指定当前卖家使用了哪个证书进行支付宝签名。
	 **/
	private $alipaySerialNumber;
	
	/** 
	 * 支付宝签名。根据参数名称将参数（tids,tag_keys,tag_values,timestamp,appkey）按照字母先后顺序排序:key + value .... key + value。用支付宝数字证书对该数据进行签名。
	 **/
	private $certSign;
	
	/** 
	 * 标记的key，用来唯一标识此标记属于谁。可以不传，默认为分润的标记"fendan"。一旦传了必需要和tid的长度和顺序一致，中间不能为空，每个内容之间以","分隔。
	 **/
	private $tagKeys;
	
	/** 
	 * 标记内容。用来存放用户指定的内容。必需和tid的个数及顺序一致，每个内容之间以","分隔。每个订单分润的内容格式为“code#分润code|id#经销商淘宝帐号|name#经销商名称|addr#经销商地址|tel#联系电话”。
	 **/
	private $tagValues;
	
	/** 
	 * 父订单id列表，中间以","分隔，一次最多允许指定更新10笔订单
	 **/
	private $tids;
	
	private $apiParas = array();
	
	public function setAlipaySerialNumber($alipaySerialNumber)
	{
		$this->alipaySerialNumber = $alipaySerialNumber;
		$this->apiParas["alipay_serial_number"] = $alipaySerialNumber;
	}

	public function getAlipaySerialNumber()
	{
		return $this->alipaySerialNumber;
	}

	public function setCertSign($certSign)
	{
		$this->certSign = $certSign;
		$this->apiParas["cert_sign"] = $certSign;
	}

	public function getCertSign()
	{
		return $this->certSign;
	}

	public function setTagKeys($tagKeys)
	{
		$this->tagKeys = $tagKeys;
		$this->apiParas["tag_keys"] = $tagKeys;
	}

	public function getTagKeys()
	{
		return $this->tagKeys;
	}

	public function setTagValues($tagValues)
	{
		$this->tagValues = $tagValues;
		$this->apiParas["tag_values"] = $tagValues;
	}

	public function getTagValues()
	{
		return $this->tagValues;
	}

	public function setTids($tids)
	{
		$this->tids = $tids;
		$this->apiParas["tids"] = $tids;
	}

	public function getTids()
	{
		return $this->tids;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.tag.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->certSign,"certSign");
		RequestCheckUtil::checkNotNull($this->tagValues,"tagValues");
		RequestCheckUtil::checkNotNull($this->tids,"tids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
