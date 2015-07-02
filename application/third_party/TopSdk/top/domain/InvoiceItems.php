<?php

/**
 * 电子发票明细
 * @author auto create
 */
class InvoiceItems
{
	
	/** 
	 * 总价，格式：100.00
	 **/
	public $amount;
	
	/** 
	 * 商品IMIE号
	 **/
	public $imei;
	
	/** 
	 * 发票项目名称（或商品名称）
	 **/
	public $itemName;
	
	/** 
	 * 发票项目编号（或商品编号）
	 **/
	public $itemNo;
	
	/** 
	 * 单价，格式：100.00
	 **/
	public $price;
	
	/** 
	 * 数量
	 **/
	public $quantity;
	
	/** 
	 * 单位
	 **/
	public $unit;	
}
?>