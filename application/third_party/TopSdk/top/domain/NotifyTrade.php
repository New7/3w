<?php

/**
 * 交易通知消息
 * @author auto create
 */
class NotifyTrade
{
	
	/** 
	 * 买家昵称
	 **/
	public $buyerNick;
	
	/** 
	 * 交易修改时间（格式：yyyy-MM-dd HH:mm:ss）
	 **/
	public $modified;
	
	/** 
	 * 消息所属的用户昵称
	 **/
	public $nick;
	
	/** 
	 * 交易消息关联的子订单id号。多笔订单父订单操作时oid与tid一致
	 **/
	public $oid;
	
	/** 
	 * 买家实付金额
	 **/
	public $payment;
	
	/** 
	 * 卖家昵称
	 **/
	public $sellerNick;
	
	/** 
	 * 交易操作所对应的交易增量消息状态，对应与NotifyTrade的status字段 

可选值 
TradeCreate（创建交易） 
TradeModifyFee（修改交易费用） 
TradeCloseAndModifyDetailOrder（关闭或修改子订单） 
TradeClose（关闭交易） 
TradeBuyerPay（买家付款） 
TradeSellerShip（卖家发货） 
TradeDelayConfirmPay（延长收货时间） 
TradePartlyRefund（子订单退款成功） 
TradePartlyConfirmPay（子订单打款成功） 
TradeSuccess（交易成功） 
TradeTimeoutRemind（交易超时提醒） 
TradeRated（交易评价变更） 
TradeMemoModified（交易备注修改） 
TradeLogisticsAddressChanged（修改交易收货地址） 
TradeChanged（修改订单信息（SKU等））
	 **/
	public $status;
	
	/** 
	 * appkey列表，用于数据同步时，返回需同步用户的数据的appkey列表。
	 **/
	public $synAppKeys;
	
	/** 
	 * 交易编号
	 **/
	public $tid;
	
	/** 
	 * 交易信息中符合用户订阅的attributes标记的key1name:value1name;key2name:value2name;……标记串。必需在SubscribeMessage的attributes中订阅过的标记，并且交易上有此标记才会返回，否则此字段为空。返回值的keyname和valuename根据用户的自定义的key名称和value值别名返回。
	 **/
	public $tradeMark;
	
	/** 
	 * 交易类型。除了交易超时提醒消息没有类型以外，其他消息都有交易类型。

具体分类有： 

可选值 
ec（直冲） 
guarantee_trade（一口价、拍卖） 
auto_delivery（自动发货） 
cod（货到付款） 
independent_shop_trade（旺店标准版交易） 
independent_simple_trade（旺店入门版交易） 
shopex_trade（ShopEX版) 
netcn_trade（淘宝与万网合作版网） 
travel（旅游产品交易） 
fenxiao（分销平台交易） 
game_equipment（网游虚拟交易）
	 **/
	public $type;
	
	/** 
	 * 消息所属的用户编号
	 **/
	public $userId;	
}
?>