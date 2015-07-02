<?php
/**
 * TOP API: taobao.topats.trades.price.update request
 * 
 * @author auto create
 * @since 1.0, 2012.06.01
 */
class TopatsTradesPriceUpdateRequest
{
	/** 
	 * 每笔要改价的子订单所对应的修改价格，需要是合法的两位小数，负数为减少，正数为增加。每个调整价格拼接原则的oids一致（同一个tid内的以","连接，不同tid之间的以";"连接）。每个adjust_fee的排列顺序需要与oids一一对应。
	 **/
	private $adjustFees;
	
	/** 
	 * 支付宝证书序列号。当买家的支付宝证书同时绑定在多个地方使用时此参数必传，用来指定当前卖家使用了哪个证书进行支付宝签名。
	 **/
	private $alipaySerialNumber;
	
	/** 
	 * 根据参数名称将参数（tids,oids,adjust_fees,logistics_fees,origin_fees,timestamp,appkey）按照字母先后顺序排序:key + value + key + value .... key + value。用支付宝数字证书对该数据进行签名。
	 **/
	private $certSign;
	
	/** 
	 * 每个tid所对应的订单物流费用。可以不传，表示所有的订单物流费用不变。只要有一个订单需要修改物流费用，所有的订单都需要指定物流费用，排列要和tid顺序一致，不需要改变物流费用的订单，该位置上放上一个空字符串""。可以不传，传了长度和位置要和tid保持一致
	 **/
	private $logisticsFees;
	
	/** 
	 * tid对应的子订单id列表。每个oid必需是合法的数字类型的子订单id号。每个tid可以有多个需要改价的oid列表，之间用","连接。不同的tid每个都要有一个oid的列表，之间用";"连接。每个tid和他的oid列表顺序要一一对应
	 **/
	private $oids;
	
	/** 
	 * 每笔要改价的子订单所对应的修改前子订单价格。防止因数据不同步引起重复改价问题。需要是合法的两位小数或整数。每个调整价格拼接原则的oids一致（同一个tid内的以","连接，不同tid之间的以";"连接）。每个origin_fee的排列顺序需要与oids一一对应。
	 **/
	private $originFees;
	
	/** 
	 * 批量修改的订单id列表，每个订单id必需是合法的数字类型的tid，每个tid之间以";"分隔，至少要指定一个tid，最多不超过40个tid
	 **/
	private $tids;
	
	private $apiParas = array();
	
	public function setAdjustFees($adjustFees)
	{
		$this->adjustFees = $adjustFees;
		$this->apiParas["adjust_fees"] = $adjustFees;
	}

	public function getAdjustFees()
	{
		return $this->adjustFees;
	}

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

	public function setLogisticsFees($logisticsFees)
	{
		$this->logisticsFees = $logisticsFees;
		$this->apiParas["logistics_fees"] = $logisticsFees;
	}

	public function getLogisticsFees()
	{
		return $this->logisticsFees;
	}

	public function setOids($oids)
	{
		$this->oids = $oids;
		$this->apiParas["oids"] = $oids;
	}

	public function getOids()
	{
		return $this->oids;
	}

	public function setOriginFees($originFees)
	{
		$this->originFees = $originFees;
		$this->apiParas["origin_fees"] = $originFees;
	}

	public function getOriginFees()
	{
		return $this->originFees;
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
		return "taobao.topats.trades.price.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adjustFees,"adjustFees");
		RequestCheckUtil::checkNotNull($this->certSign,"certSign");
		RequestCheckUtil::checkNotNull($this->oids,"oids");
		RequestCheckUtil::checkNotNull($this->originFees,"originFees");
		RequestCheckUtil::checkNotNull($this->tids,"tids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
