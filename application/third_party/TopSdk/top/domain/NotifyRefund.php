<?php

/**
 * 退款通知消息
 * @author auto create
 */
class NotifyRefund
{
	
	/** 
	 * 买家昵称
	 **/
	public $buyerNick;
	
	/** 
	 * 子订单退款交易编号
	 **/
	public $oid;
	
	/** 
	 * 退款金额
	 **/
	public $refundFee;
	
	/** 
	 * 退款编号
	 **/
	public $refundId;
	
	/** 
	 * 退款阶段类型:onsale(售中),aftersale(售后)。aftersale消息是本次新加类型。
	 **/
	public $refundPhase;
	
	/** 
	 * 退款类型：refund(退款)，return(退货)
	 **/
	public $refundType;
	
	/** 
	 * 卖家昵称
	 **/
	public $sellerNick;
	
	/** 
	 * 退款操作所对应的退款增量消息状态 
可选值： 
RefundSuccess（退款成功） 
RefundClosed（退款关闭） 
RefundCreated（退款创建） 
RefundSellerAgreeAgreement（卖家同意退款协议） 
RefundSellerRefuseAgreement（卖家拒绝退款协议） 
RefundBuyerModifyAgreement（买家修改退款协议） 
RefundBuyerReturnGoods（买家退货给卖家） 
RefundCreateMessage（发表留言） 
RefundBlockMessage（屏蔽留言） 
RefundTimeoutRemind（退款超时提醒）
	 **/
	public $status;
	
	/** 
	 * 父订单退款交易编号
	 **/
	public $tid;
	
	/** 
	 * 消息所属的用户编号
	 **/
	public $userId;	
}
?>