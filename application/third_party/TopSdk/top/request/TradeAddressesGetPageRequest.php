<?php
/**
 * TOP API: taobao.trade.addresses.get.page request
 * 
 * @author auto create
 * @since 1.0, 2012.01.09
 */
class TradeAddressesGetPageRequest
{
	/** 
	 * 这个参数是用来指定默认选中的地址的，当创建交易失败时，如果是重定向到原来的出价页面上的时候，在引用收货地址的地方把这个参数带上，就可以默认选择用户之前操作时选择的地址，不加的话收货地址默认还是会选中用户在淘宝上一次交易时使用的地址
	 **/
	private $addrSelected;
	
	/** 
	 * 编码，“UTF-8”，“GBK”
	 **/
	private $encoding;
	
	private $apiParas = array();
	
	public function setAddrSelected($addrSelected)
	{
		$this->addrSelected = $addrSelected;
		$this->apiParas["addr_selected"] = $addrSelected;
	}

	public function getAddrSelected()
	{
		return $this->addrSelected;
	}

	public function setEncoding($encoding)
	{
		$this->encoding = $encoding;
		$this->apiParas["encoding"] = $encoding;
	}

	public function getEncoding()
	{
		return $this->encoding;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.addresses.get.page";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->encoding,"encoding");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
