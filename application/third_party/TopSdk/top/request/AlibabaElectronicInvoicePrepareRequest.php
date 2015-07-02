<?php
/**
 * TOP API: alibaba.electronic.invoice.prepare request
 * 
 * @author auto create
 * @since 1.0, 2015.06.18
 */
class AlibabaElectronicInvoicePrepareRequest
{
	/** 
	 * 开票操作类型：1 交易成功 2 退货、退款成功 3 电子换纸质 4 电子发票更换（抬头的变化）
	 **/
	private $invoiceActionType;
	
	/** 
	 * 实际开票的抬头，如果实际开票抬头与订单详情中取得的抬头不一致，需要传此字段更新。买家在下单后可能出现线下联系卖家要求更改发票抬头；订单详情页面需要最新的发票抬头展示给买家。更新发票抬头时，开票操作类型只能为3或4。
	 **/
	private $invoiceTitle;
	
	/** 
	 * 发票类型，1:蓝票，2:红票
	 **/
	private $invoiceType;
	
	/** 
	 * 开票流水号，唯一标志开票请求。如果两次请求流水号相同，则表示重复请求, 由于ERP根据自己的业务请求确定。可采用订单id+操作代码。比如：订单号转成十六进制 + 操作代码（表示红票还是蓝票）+ 操作序号。
	 **/
	private $serialNo;
	
	/** 
	 * 淘宝的主订单id
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setInvoiceActionType($invoiceActionType)
	{
		$this->invoiceActionType = $invoiceActionType;
		$this->apiParas["invoice_action_type"] = $invoiceActionType;
	}

	public function getInvoiceActionType()
	{
		return $this->invoiceActionType;
	}

	public function setInvoiceTitle($invoiceTitle)
	{
		$this->invoiceTitle = $invoiceTitle;
		$this->apiParas["invoice_title"] = $invoiceTitle;
	}

	public function getInvoiceTitle()
	{
		return $this->invoiceTitle;
	}

	public function setInvoiceType($invoiceType)
	{
		$this->invoiceType = $invoiceType;
		$this->apiParas["invoice_type"] = $invoiceType;
	}

	public function getInvoiceType()
	{
		return $this->invoiceType;
	}

	public function setSerialNo($serialNo)
	{
		$this->serialNo = $serialNo;
		$this->apiParas["serial_no"] = $serialNo;
	}

	public function getSerialNo()
	{
		return $this->serialNo;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "alibaba.electronic.invoice.prepare";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->invoiceActionType,"invoiceActionType");
		RequestCheckUtil::checkMaxValue($this->invoiceActionType,4,"invoiceActionType");
		RequestCheckUtil::checkMinValue($this->invoiceActionType,1,"invoiceActionType");
		RequestCheckUtil::checkMaxLength($this->invoiceTitle,50,"invoiceTitle");
		RequestCheckUtil::checkNotNull($this->invoiceType,"invoiceType");
		RequestCheckUtil::checkMaxValue($this->invoiceType,2,"invoiceType");
		RequestCheckUtil::checkMinValue($this->invoiceType,1,"invoiceType");
		RequestCheckUtil::checkNotNull($this->serialNo,"serialNo");
		RequestCheckUtil::checkMaxLength($this->serialNo,20,"serialNo");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
