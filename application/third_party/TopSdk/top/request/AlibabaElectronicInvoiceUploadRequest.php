<?php
/**
 * TOP API: alibaba.electronic.invoice.upload request
 * 
 * @author auto create
 * @since 1.0, 2015.06.23
 */
class AlibabaElectronicInvoiceUploadRequest
{
	/** 
	 * 防伪码
	 **/
	private $antiFakeCode;
	
	/** 
	 * 电子发票号
	 **/
	private $electronicInvoiceNo;
	
	/** 
	 * 开票金额，格式:100.00, 冲红时格式为"-100.00"
	 **/
	private $invoiceAmount;
	
	/** 
	 * 发票代码
	 **/
	private $invoiceCode;
	
	/** 
	 * 发票文件内容,目前只支持jpg,png,bmp,pdf格式
	 **/
	private $invoiceFileData;
	
	/** 
	 * 发票号码
	 **/
	private $invoiceNo;
	
	/** 
	 * 开票日期, 格式"YYYY-MM-DD HH:SS:MM"
	 **/
	private $invoiceTime;
	
	/** 
	 * 1 蓝票 2 红票
	 **/
	private $invoiceType;
	
	/** 
	 * 二维码,二维码扫码的结果。
	 **/
	private $qrCode;
	
	/** 
	 * 开票流水号，唯一标志开票请求。如果两次请求流水号相同，则表示重复请求, 由于ERP根据自己的业务请求确定。可采用订单id+操作代码，比如：订单号转成十六进制 +  操作代码（表示红票还是蓝票）+ 操作序号
	 **/
	private $serialNo;
	
	/** 
	 * 淘宝的主订单id
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setAntiFakeCode($antiFakeCode)
	{
		$this->antiFakeCode = $antiFakeCode;
		$this->apiParas["anti_fake_code"] = $antiFakeCode;
	}

	public function getAntiFakeCode()
	{
		return $this->antiFakeCode;
	}

	public function setElectronicInvoiceNo($electronicInvoiceNo)
	{
		$this->electronicInvoiceNo = $electronicInvoiceNo;
		$this->apiParas["electronic_invoice_no"] = $electronicInvoiceNo;
	}

	public function getElectronicInvoiceNo()
	{
		return $this->electronicInvoiceNo;
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

	public function setInvoiceCode($invoiceCode)
	{
		$this->invoiceCode = $invoiceCode;
		$this->apiParas["invoice_code"] = $invoiceCode;
	}

	public function getInvoiceCode()
	{
		return $this->invoiceCode;
	}

	public function setInvoiceFileData($invoiceFileData)
	{
		$this->invoiceFileData = $invoiceFileData;
		$this->apiParas["invoice_file_data"] = $invoiceFileData;
	}

	public function getInvoiceFileData()
	{
		return $this->invoiceFileData;
	}

	public function setInvoiceNo($invoiceNo)
	{
		$this->invoiceNo = $invoiceNo;
		$this->apiParas["invoice_no"] = $invoiceNo;
	}

	public function getInvoiceNo()
	{
		return $this->invoiceNo;
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

	public function setQrCode($qrCode)
	{
		$this->qrCode = $qrCode;
		$this->apiParas["qr_code"] = $qrCode;
	}

	public function getQrCode()
	{
		return $this->qrCode;
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
		return "alibaba.electronic.invoice.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->antiFakeCode,20,"antiFakeCode");
		RequestCheckUtil::checkNotNull($this->electronicInvoiceNo,"electronicInvoiceNo");
		RequestCheckUtil::checkMaxLength($this->electronicInvoiceNo,20,"electronicInvoiceNo");
		RequestCheckUtil::checkNotNull($this->invoiceAmount,"invoiceAmount");
		RequestCheckUtil::checkNotNull($this->invoiceCode,"invoiceCode");
		RequestCheckUtil::checkMaxLength($this->invoiceCode,20,"invoiceCode");
		RequestCheckUtil::checkNotNull($this->invoiceFileData,"invoiceFileData");
		RequestCheckUtil::checkNotNull($this->invoiceNo,"invoiceNo");
		RequestCheckUtil::checkMaxLength($this->invoiceNo,20,"invoiceNo");
		RequestCheckUtil::checkNotNull($this->invoiceTime,"invoiceTime");
		RequestCheckUtil::checkNotNull($this->invoiceType,"invoiceType");
		RequestCheckUtil::checkMaxValue($this->invoiceType,2,"invoiceType");
		RequestCheckUtil::checkMinValue($this->invoiceType,1,"invoiceType");
		RequestCheckUtil::checkMaxLength($this->qrCode,1000,"qrCode");
		RequestCheckUtil::checkNotNull($this->serialNo,"serialNo");
		RequestCheckUtil::checkMaxLength($this->serialNo,20,"serialNo");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
