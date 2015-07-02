<?php

/**
 * 商品扩展结构，通过iid和Item结构相关联
 * @author auto create
 */
class ItemExtra
{
	
	/** 
	 * 商品上传后的状态。可选值:
onsale(出售中)
instock(库存中)
	 **/
	public $approveStatus;
	
	/** 
	 * 创建日期
	 **/
	public $created;
	
	/** 
	 * 下架时间
	 **/
	public $delistTime;
	
	/** 
	 * 扩展表的描述，不能大于25000个字节。
	 **/
	public $desc;
	
	/** 
	 * 商品扩展ID，商品扩展记录的id
	 **/
	public $eid;
	
	/** 
	 * 自定义信息，不能大于1000个字节
	 **/
	public $feature;
	
	/** 
	 * 商品字符串id，对应于Item结构体里面的iid(注意：iid近期即将废弃，请用num_iid参数)
	 **/
	public $iid;
	
	/** 
	 * 商品Item库存(商品主表)
	 **/
	public $itemNum;
	
	/** 
	 * 商品Item里面的options字段，标记了商品的某些特性
	 **/
	public $itemOptions;
	
	/** 
	 * 商品Item里面的主图地址
	 **/
	public $itemPicUrl;
	
	/** 
	 * 上架时间
	 **/
	public $listTime;
	
	/** 
	 * 备注，不能大于1000个字节
	 **/
	public $memo;
	
	/** 
	 * 最后修改日期
	 **/
	public $modified;
	
	/** 
	 * 商品卖家昵称 （仅搜索返回）
	 **/
	public $nick;
	
	/** 
	 * 商品主表Item数字id （仅搜索返回）
	 **/
	public $numIid;
	
	/** 
	 * options字段，用于对扩展商品按位打某些标记
	 **/
	public $options;
	
	/** 
	 * 图片地址
	 **/
	public $picUrl;
	
	/** 
	 * 扩展商品的价格。预订金，取值范围:0-100000000;精确到2位小数;单位:元。如:200.07，表示:200元7分。
	 **/
	public $reservePrice;
	
	/** 
	 * 卖家自定义店铺类目 （仅搜索返回）
	 **/
	public $sellerCids;
	
	/** 
	 * 卖家店铺id （仅搜索返回）
	 **/
	public $shopId;
	
	/** 
	 * 扩展sku列表
	 **/
	public $skus;
	
	/** 
	 * 商品扩展表的标题，不能大于100个字节
	 **/
	public $title;
	
	/** 
	 * 扩展商品的类型。other:其他网店 ；uniqlo: 优衣库 ；tmall:北京旺店；tom:开源网店
	 **/
	public $type;	
}
?>