<?php

/**
 * 提供查询APPKey为淘宝带来成交以及流量
 * @author auto create
 */
class TopSpm
{
	
	/** 
	 * 为淘宝带来的支付宝成交金额
	 **/
	public $alipayDealAmount;
	
	/** 
	 * 为淘宝带来的支付宝成交笔数
	 **/
	public $alipayDealCount;
	
	/** 
	 * 为淘宝带来的支付宝成交人数
	 **/
	public $alipayUv;
	
	/** 
	 * SPM第四位编码（默认为TOP系统自动生成的0-9数字，ISV可以自行更改编码，但建议使用数字）
	 **/
	public $module;
	
	/** 
	 * SPM第三位编码（默认为TOP系统自动生成的0-9数字，ISV可以自行更改编码，但建议使用数字）
	 **/
	public $page;
	
	/** 
	 * 为淘宝带来的PV
	 **/
	public $pv;
	
	/** 
	 * 为淘宝带来的UV
	 **/
	public $uv;	
}
?>