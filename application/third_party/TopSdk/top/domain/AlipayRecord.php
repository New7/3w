<?php

/**
 * 支付宝交易记录明细
 * @author auto create
 */
class AlipayRecord
{
	
	/** 
	 * 支付宝订单号
	 **/
	public $alipayOrderNo;
	
	/** 
	 * 当时支付宝账户余额
	 **/
	public $balance;
	
	/** 
	 * 子业务类型
	 **/
	public $businessType;
	
	/** 
	 * 创建时间
	 **/
	public $createTime;
	
	/** 
	 * 收入金额
	 **/
	public $inAmount;
	
	/** 
	 * 账号备注
	 **/
	public $memo;
	
	/** 
	 * 支付宝订单号
	 **/
	public $merchantOrderNo;
	
	/** 
	 * 对方的支付宝ID
	 **/
	public $optUserId;
	
	/** 
	 * 支出金额
	 **/
	public $outAmount;
	
	/** 
	 * 自己的支付宝ID
	 **/
	public $selfUserId;
	
	/** 
	 * 账务类型
	 **/
	public $type;	
}
?>