<?php

/**
 * 批量修改订单的每个子订单处理结果
 * @author auto create
 */
class TradeResult
{
	
	/** 
	 * 每笔订单更新失败时返回的错误码
	 **/
	public $subCode;
	
	/** 
	 * 每笔订单更新时返回的错误信息内容
	 **/
	public $subMsg;
	
	/** 
	 * 处理成功的交易信息。里面只包含tid和modified
	 **/
	public $trade;	
}
?>