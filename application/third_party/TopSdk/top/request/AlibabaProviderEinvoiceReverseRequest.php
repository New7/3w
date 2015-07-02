<?php
/**
 * TOP API: alibaba.provider.einvoice.reverse request
 * 
 * @author auto create
 * @since 1.0, 2015.06.17
 */
class AlibabaProviderEinvoiceReverseRequest
{
	/** 
	 * 原蓝字电子发票号码
	 **/
	private $normalElectronicInvoiceNo;
	
	/** 
	 * 原蓝字发票代码
	 **/
	private $normalInvoiceCode;
	
	/** 
	 * 原蓝字发票号码
	 **/
	private $normalInvoiceNo;
	
	/** 
	 * 收款方名称
	 **/
	private $payeeName;
	
	/** 
	 * 电商平台代码。淘宝：taobao，天猫：tmall
	 **/
	private $platformCode;
	
	/** 
	 * 电商平台对应的退款单号
	 **/
	private $platformRid;
	
	/** 
	 * 电商平台对应的订单号
	 **/
	private $platformTid;
	
	/** 
	 * 原因(如:用户退货)特别声明,请真实的 填写原因反映实际情况
	 **/
	private $reason;
	
	/** 
	 * erp自写义的退款订单号
	 **/
	private $refundId;
	
	/** 
	 * 开票流水号，唯一标志开票请求。如果两次请求流水号相同，则表示重复请求。可采用订单id+操作代码。比如：订单号转成十六进制 + 操作代码（表示红票还是蓝票）+ 操作序号
	 **/
	private $serialNo;
	
	private $apiParas = array();
	
	public function setNormalElectronicInvoiceNo($normalElectronicInvoiceNo)
	{
		$this->normalElectronicInvoiceNo = $normalElectronicInvoiceNo;
		$this->apiParas["normal_electronic_invoice_no"] = $normalElectronicInvoiceNo;
	}

	public function getNormalElectronicInvoiceNo()
	{
		return $this->normalElectronicInvoiceNo;
	}

	public function setNormalInvoiceCode($normalInvoiceCode)
	{
		$this->normalInvoiceCode = $normalInvoiceCode;
		$this->apiParas["normal_invoice_code"] = $normalInvoiceCode;
	}

	public function getNormalInvoiceCode()
	{
		return $this->normalInvoiceCode;
	}

	public function setNormalInvoiceNo($normalInvoiceNo)
	{
		$this->normalInvoiceNo = $normalInvoiceNo;
		$this->apiParas["normal_invoice_no"] = $normalInvoiceNo;
	}

	public function getNormalInvoiceNo()
	{
		return $this->normalInvoiceNo;
	}

	public function setPayeeName($payeeName)
	{
		$this->payeeName = $payeeName;
		$this->apiParas["payee_name"] = $payeeName;
	}

	public function getPayeeName()
	{
		return $this->payeeName;
	}

	public function setPlatformCode($platformCode)
	{
		$this->platformCode = $platformCode;
		$this->apiParas["platform_code"] = $platformCode;
	}

	public function getPlatformCode()
	{
		return $this->platformCode;
	}

	public function setPlatformRid($platformRid)
	{
		$this->platformRid = $platformRid;
		$this->apiParas["platform_rid"] = $platformRid;
	}

	public function getPlatformRid()
	{
		return $this->platformRid;
	}

	public function setPlatformTid($platformTid)
	{
		$this->platformTid = $platformTid;
		$this->apiParas["platform_tid"] = $platformTid;
	}

	public function getPlatformTid()
	{
		return $this->platformTid;
	}

	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
	}

	public function setRefundId($refundId)
	{
		$this->refundId = $refundId;
		$this->apiParas["refund_id"] = $refundId;
	}

	public function getRefundId()
	{
		return $this->refundId;
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

	public function getApiMethodName()
	{
		return "alibaba.provider.einvoice.reverse";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->normalInvoiceCode,"normalInvoiceCode");
		RequestCheckUtil::checkMaxLength($this->normalInvoiceCode,100,"normalInvoiceCode");
		RequestCheckUtil::checkNotNull($this->normalInvoiceNo,"normalInvoiceNo");
		RequestCheckUtil::checkMaxLength($this->normalInvoiceNo,100,"normalInvoiceNo");
		RequestCheckUtil::checkNotNull($this->payeeName,"payeeName");
		RequestCheckUtil::checkMaxLength($this->payeeName,100,"payeeName");
		RequestCheckUtil::checkNotNull($this->platformCode,"platformCode");
		RequestCheckUtil::checkMaxLength($this->platformCode,50,"platformCode");
		RequestCheckUtil::checkMaxLength($this->platformRid,100,"platformRid");
		RequestCheckUtil::checkNotNull($this->platformTid,"platformTid");
		RequestCheckUtil::checkNotNull($this->reason,"reason");
		RequestCheckUtil::checkMaxLength($this->reason,1000,"reason");
		RequestCheckUtil::checkMaxLength($this->refundId,100,"refundId");
		RequestCheckUtil::checkNotNull($this->serialNo,"serialNo");
		RequestCheckUtil::checkMaxLength($this->serialNo,100,"serialNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
