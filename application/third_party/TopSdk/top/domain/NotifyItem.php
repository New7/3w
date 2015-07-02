<?php

/**
 * 商品通知消息
 * @author auto create
 */
class NotifyItem
{
	
	/** 
	 * 商品此次操作所变更的字段，以“,”分割，对应于商品Item的字段名称。目前支持title，price，num，item_img，prop_img，location，cid，approve_status， list_time几个字段的更改标记返回，其中“item_img，prop_img”会同时出现表示商品相关图片列表发生了修改
	 **/
	public $changedFields;
	
	/** 
	 * 商品编号(注意：iid近期即将废弃，请用num_iid参数)
	 **/
	public $iid;
	
	/** 
	 * 商品库存的变化量，当商品库存增加时，此值为正数；当商品库存减少时，此值为负数。
	 **/
	public $increment;
	
	/** 
	 * 商品修改时间（格式：yyyy-MM-dd HH:mm:ss）
	 **/
	public $modified;
	
	/** 
	 * 卖家昵称
	 **/
	public $nick;
	
	/** 
	 * 商品数量
	 **/
	public $num;
	
	/** 
	 * 商品数字编号
	 **/
	public $numIid;
	
	/** 
	 * 商品价格，格式：5.00；单位：元；精确到：分
	 **/
	public $price;
	
	/** 
	 * 商品SKU编号
	 **/
	public $skuId;
	
	/** 
	 * 商品SKU库存
	 **/
	public $skuNum;
	
	/** 
	 * 商品操作所对应的商品增量消息状态。
可选值 
ItemAdd（新增商品） 
ItemUpshelf（上架商品） 
ItemDownshelf（下架商品） 
ItemDelete（删除商品） 
ItemUpdate（更新商品） 
ItemRecommendDelete（取消橱窗推荐商品） 
ItemRecommendAdd（橱窗推荐商品） 
ItemZeroStock（商品卖空）
ItemPunishDelete（小二删除商品）
ItemPunishDownshelf（小二下架商品）
ItemPunishCc（小二CC商品）
ItemSkuZeroStock（商品SKU卖空）
ItemStockChanged（修改商品库存）
	 **/
	public $status;
	
	/** 
	 * 需同步数据的appkey列表。表示用户消息需要同步的appkey
	 **/
	public $synAppKeys;
	
	/** 
	 * 商品标题,不能超过60字节
	 **/
	public $title;
	
	/** 
	 * 消息所属的用户编号
	 **/
	public $userId;	
}
?>