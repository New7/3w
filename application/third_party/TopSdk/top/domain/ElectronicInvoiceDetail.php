<?php

/**
 * 电子发票详情
 * @author auto create
 */
class ElectronicInvoiceDetail
{
	
	/** 
	 * 电子发票号
	 **/
	public $electronicInvoiceNo;
	
	/** 
	 * 发票代码
	 **/
	public $invoiceCode;
	
	/** 
	 * 发票的下载地址，7天失效。
	 **/
	public $invoiceFileUrl;
	
	/** 
	 * 发票号码
	 **/
	public $invoiceNo;
	
	/** 
	 * 开票日期
	 **/
	public $invoiceTime;
	
	/** 
	 * 1 蓝票 2 红票
	 **/
	public $invoiceType;
	
	/** 
	 * 淘宝的主订单id
	 **/
	public $tid;	
}
?>