<?php
/**
 * TOP API: alibaba.provider.einvoice.create request
 * 
 * @author auto create
 * @since 1.0, 2015.06.19
 */
class AlibabaProviderEinvoiceCreateRequest
{
	/** 
	 * "1:B2B(商家对企业)   0:B2C(商家对个人)  默认：0 对于商家对企业开具，默认为1，这个情况下，收款方税务登记证号和收款方名称不能为空，付款方税务登记证号和付款方名称不能为空； 对于商家对个人开具，默认为0，这个情况下，收款方税务登记证号和收款方名称不能为空，付款方税务登记证号和付款方名称可以为空；"
	 **/
	private $businessType;
	
	/** 
	 * erp系统中的单据号。如果没有erp的唯一单据号。建议使用platform_code+”_”+ platform_tid的组合方式
	 **/
	private $erpTid;
	
	/** 
	 * 开票金额
	 **/
	private $invoiceAmount;
	
	/** 
	 * 电子发票明细列表
	 **/
	private $invoiceItems;
	
	/** 
	 * 发票备注，有些省市会把此信息打印到PDF中
	 **/
	private $invoiceMemo;
	
	/** 
	 * 开票日期, 格式"YYYY-MM-DD HH:SS:MM"
	 **/
	private $invoiceTime;
	
	/** 
	 * 发票类别。"0：增值税专用发票(B2B)  1：普通发票(B2B，B2C)  2：电子发票(B2B，B2C)"
	 **/
	private $invoiceType;
	
	/** 
	 * 开票方地址及 电话
	 **/
	private $payeeAddress;
	
	/** 
	 * 开票方银行及 帐号
	 **/
	private $payeeBankaccount;
	
	/** 
	 * 收款方名称，开票员(如:海尔商城)
	 **/
	private $payeeName;
	
	/** 
	 * 收款方税务登记证号
	 **/
	private $payeeRegisterNo;
	
	/** 
	 * 消费者地址，开具增值税专用发票时必填，其他发票可以为空
	 **/
	private $payerAddress;
	
	/** 
	 * 付款方开票开户银行及账号
	 **/
	private $payerBankaccount;
	
	/** 
	 * 消费者电子邮箱
	 **/
	private $payerEmail;
	
	/** 
	 * 付款方名称, 对应发票台头
	 **/
	private $payerName;
	
	/** 
	 * 消费者联系电话，开具增值税专用发票时必填，其他发票可以为空。
	 **/
	private $payerPhone;
	
	/** 
	 * 付款方税务登记证号。对企业开具电子发票时必填。目前北京地区暂未开放对企业开具电子发票，若北京地区放开后，对于向企业开具的情况，付款方税务登记证号和名称也不能为空
	 **/
	private $payerRegisterNo;
	
	/** 
	 * 电商平台代码。淘宝：taobao，天猫：tmall
	 **/
	private $platformCode;
	
	/** 
	 * 电商平台对应的订单号
	 **/
	private $platformTid;
	
	/** 
	 * 开票流水号，唯一标志开票请求。如果两次请求流水号相同，则表示重复请求。
	 **/
	private $serialNo;
	
	private $apiParas = array();
	
	public function setBusinessType($businessType)
	{
		$this->businessType = $businessType;
		$this->apiParas["business_type"] = $businessType;
	}

	public function getBusinessType()
	{
		return $this->businessType;
	}

	public function setErpTid($erpTid)
	{
		$this->erpTid = $erpTid;
		$this->apiParas["erp_tid"] = $erpTid;
	}

	public function getErpTid()
	{
		return $this->erpTid;
	}

	public function setInvoiceAmount($invoiceAmount)
	{
		$this->invoiceAmount = $invoiceAmount;
		$this->apiParas["invoice_amount"] = $invoiceAmount;
	}

	public function getInvoiceAmount()
	{
		return $this->invoiceAmount;
	}

	public function setInvoiceItems($invoiceItems)
	{
		$this->invoiceItems = $invoiceItems;
		$this->apiParas["invoice_items"] = $invoiceItems;
	}

	public function getInvoiceItems()
	{
		return $this->invoiceItems;
	}

	public function setInvoiceMemo($invoiceMemo)
	{
		$this->invoiceMemo = $invoiceMemo;
		$this->apiParas["invoice_memo"] = $invoiceMemo;
	}

	public function getInvoiceMemo()
	{
		return $this->invoiceMemo;
	}

	public function setInvoiceTime($invoiceTime)
	{
		$this->invoiceTime = $invoiceTime;
		$this->apiParas["invoice_time"] = $invoiceTime;
	}

	public function getInvoiceTime()
	{
		return $this->invoiceTime;
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

	public function setPayeeAddress($payeeAddress)
	{
		$this->payeeAddress = $payeeAddress;
		$this->apiParas["payee_address"] = $payeeAddress;
	}

	public function getPayeeAddress()
	{
		return $this->payeeAddress;
	}

	public function setPayeeBankaccount($payeeBankaccount)
	{
		$this->payeeBankaccount = $payeeBankaccount;
		$this->apiParas["payee_bankaccount"] = $payeeBankaccount;
	}

	public function getPayeeBankaccount()
	{
		return $this->payeeBankaccount;
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

	public function setPayeeRegisterNo($payeeRegisterNo)
	{
		$this->payeeRegisterNo = $payeeRegisterNo;
		$this->apiParas["payee_register_no"] = $payeeRegisterNo;
	}

	public function getPayeeRegisterNo()
	{
		return $this->payeeRegisterNo;
	}

	public function setPayerAddress($payerAddress)
	{
		$this->payerAddress = $payerAddress;
		$this->apiParas["payer_address"] = $payerAddress;
	}

	public function getPayerAddress()
	{
		return $this->payerAddress;
	}

	public function setPayerBankaccount($payerBankaccount)
	{
		$this->payerBankaccount = $payerBankaccount;
		$this->apiParas["payer_bankaccount"] = $payerBankaccount;
	}

	public function getPayerBankaccount()
	{
		return $this->payerBankaccount;
	}

	public function setPayerEmail($payerEmail)
	{
		$this->payerEmail = $payerEmail;
		$this->apiParas["payer_email"] = $payerEmail;
	}

	public function getPayerEmail()
	{
		return $this->payerEmail;
	}

	public function setPayerName($payerName)
	{
		$this->payerName = $payerName;
		$this->apiParas["payer_name"] = $payerName;
	}

	public function getPayerName()
	{
		return $this->payerName;
	}

	public function setPayerPhone($payerPhone)
	{
		$this->payerPhone = $payerPhone;
		$this->apiParas["payer_phone"] = $payerPhone;
	}

	public function getPayerPhone()
	{
		return $this->payerPhone;
	}

	public function setPayerRegisterNo($payerRegisterNo)
	{
		$this->payerRegisterNo = $payerRegisterNo;
		$this->apiParas["payer_register_no"] = $payerRegisterNo;
	}

	public function getPayerRegisterNo()
	{
		return $this->payerRegisterNo;
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

	public function setPlatformTid($platformTid)
	{
		$this->platformTid = $platformTid;
		$this->apiParas["platform_tid"] = $platformTid;
	}

	public function getPlatformTid()
	{
		return $this->platformTid;
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
		return "alibaba.provider.einvoice.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->businessType,"businessType");
		RequestCheckUtil::checkMaxValue($this->businessType,1,"businessType");
		RequestCheckUtil::checkMinValue($this->businessType,0,"businessType");
		RequestCheckUtil::checkNotNull($this->erpTid,"erpTid");
		RequestCheckUtil::checkNotNull($this->invoiceAmount,"invoiceAmount");
		RequestCheckUtil::checkMaxLength($this->invoiceAmount,20,"invoiceAmount");
		RequestCheckUtil::checkMaxLength($this->invoiceMemo,1000,"invoiceMemo");
		RequestCheckUtil::checkNotNull($this->invoiceTime,"invoiceTime");
		RequestCheckUtil::checkNotNull($this->invoiceType,"invoiceType");
		RequestCheckUtil::checkMaxValue($this->invoiceType,2,"invoiceType");
		RequestCheckUtil::checkMinValue($this->invoiceType,0,"invoiceType");
		RequestCheckUtil::checkMaxLength($this->payeeBankaccount,200,"payeeBankaccount");
		RequestCheckUtil::checkNotNull($this->payeeName,"payeeName");
		RequestCheckUtil::checkMaxLength($this->payeeName,100,"payeeName");
		RequestCheckUtil::checkNotNull($this->payeeRegisterNo,"payeeRegisterNo");
		RequestCheckUtil::checkMaxLength($this->payeeRegisterNo,200,"payeeRegisterNo");
		RequestCheckUtil::checkMaxLength($this->payerAddress,300,"payerAddress");
		RequestCheckUtil::checkNotNull($this->payerName,"payerName");
		RequestCheckUtil::checkMaxLength($this->payerName,200,"payerName");
		RequestCheckUtil::checkNotNull($this->payerPhone,"payerPhone");
		RequestCheckUtil::checkMaxLength($this->payerPhone,20,"payerPhone");
		RequestCheckUtil::checkNotNull($this->payerRegisterNo,"payerRegisterNo");
		RequestCheckUtil::checkMaxLength($this->payerRegisterNo,200,"payerRegisterNo");
		RequestCheckUtil::checkNotNull($this->platformCode,"platformCode");
		RequestCheckUtil::checkNotNull($this->platformTid,"platformTid");
		RequestCheckUtil::checkNotNull($this->serialNo,"serialNo");
		RequestCheckUtil::checkMaxLength($this->serialNo,100,"serialNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
