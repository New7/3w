<?php
/**
 * TOP API: taobao.itemextra.add request
 * 
 * @author auto create
 * @since 1.0, 2014.03.04
 */
class ItemextraAddRequest
{
	/** 
	 * 商品上传后的状态。可选值:
onsale(出售中)
instock(库存中)
	 **/
	private $approveStatus;
	
	/** 
	 * 扩展商品下架时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $delistTime;
	
	/** 
	 * 扩展商品描述.不能大于25000个字节
	 **/
	private $desc;
	
	/** 
	 * 自定义信息.不能大于1000个字节
	 **/
	private $feature;
	
	/** 
	 * 商品扩展图片
	 **/
	private $image;
	
	/** 
	 * 扩展商品上架时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $listTime;
	
	/** 
	 * 扩展商品备注.不能大于1000个字节
	 **/
	private $memo;
	
	/** 
	 * 商品Item数字ID，必选
	 **/
	private $numIid;
	
	/** 
	 * 扩展商品options字段，用户按位标记商品的某些特性
	 **/
	private $options;
	
	/** 
	 * 扩展商品主图需要关联的图片空间的相对url。这个url所对应的图片必须要属于当前用户。pic_path和image只需要传入一个,如果两个都传，默认选择pic_path
	 **/
	private $picPath;
	
	/** 
	 * 扩展商品价格，预订金.取值范围:0-100000000;精确到2位小数;单位:元。如:200.07，表示:200元7分。
	 **/
	private $reservePrice;
	
	/** 
	 * 卖家自定义店铺类目
	 **/
	private $sellerCids;
	
	/** 
	 * 卖家店铺id
	 **/
	private $shopId;
	
	/** 
	 * 扩展SKU的ID列表
	 **/
	private $skuExtraIds;
	
	/** 
	 * Sku_id串 可以为空，如果为空，为新SKU；如果想要绑定已有的sku，那在这里传sku_id就可以
	 **/
	private $skuIds;
	
	/** 
	 * Sku 的备注串，结构如：2,3,…
	 **/
	private $skuMemos;
	
	/** 
	 * sku的价格串，结构如：10.00,5.00,… 取值范围:0-100000000;精确到2位小数;单位:元。如:200.07，表示:200元7分。
	 **/
	private $skuPrices;
	
	/** 
	 * 扩展SKU的属性串，调用taobao.itemprops.get获取类目属性，如果属性是销售属性，再用taobao.itempropvalues.get取得vid。格式:pid:vid;pid:vid。 属性有几对，那以下字段sku_quantities、sku_prices、sku_memos(若给定)也需要有几对，需要一一匹配
	 **/
	private $skuProperties;
	
	/** 
	 * 扩展sku的数量串，结构如：2,3,…
	 **/
	private $skuQuantities;
	
	/** 
	 * 扩展商品标题.不能大于100个字节
	 **/
	private $title;
	
	/** 
	 * 扩展类型. 可选值: uniqlo(优衣库) , tom(开源网店) , tmall(北京旺店)
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setApproveStatus($approveStatus)
	{
		$this->approveStatus = $approveStatus;
		$this->apiParas["approve_status"] = $approveStatus;
	}

	public function getApproveStatus()
	{
		return $this->approveStatus;
	}

	public function setDelistTime($delistTime)
	{
		$this->delistTime = $delistTime;
		$this->apiParas["delist_time"] = $delistTime;
	}

	public function getDelistTime()
	{
		return $this->delistTime;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setFeature($feature)
	{
		$this->feature = $feature;
		$this->apiParas["feature"] = $feature;
	}

	public function getFeature()
	{
		return $this->feature;
	}

	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setListTime($listTime)
	{
		$this->listTime = $listTime;
		$this->apiParas["list_time"] = $listTime;
	}

	public function getListTime()
	{
		return $this->listTime;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
	}

	public function setOptions($options)
	{
		$this->options = $options;
		$this->apiParas["options"] = $options;
	}

	public function getOptions()
	{
		return $this->options;
	}

	public function setPicPath($picPath)
	{
		$this->picPath = $picPath;
		$this->apiParas["pic_path"] = $picPath;
	}

	public function getPicPath()
	{
		return $this->picPath;
	}

	public function setReservePrice($reservePrice)
	{
		$this->reservePrice = $reservePrice;
		$this->apiParas["reserve_price"] = $reservePrice;
	}

	public function getReservePrice()
	{
		return $this->reservePrice;
	}

	public function setSellerCids($sellerCids)
	{
		$this->sellerCids = $sellerCids;
		$this->apiParas["seller_cids"] = $sellerCids;
	}

	public function getSellerCids()
	{
		return $this->sellerCids;
	}

	public function setShopId($shopId)
	{
		$this->shopId = $shopId;
		$this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId()
	{
		return $this->shopId;
	}

	public function setSkuExtraIds($skuExtraIds)
	{
		$this->skuExtraIds = $skuExtraIds;
		$this->apiParas["sku_extra_ids"] = $skuExtraIds;
	}

	public function getSkuExtraIds()
	{
		return $this->skuExtraIds;
	}

	public function setSkuIds($skuIds)
	{
		$this->skuIds = $skuIds;
		$this->apiParas["sku_ids"] = $skuIds;
	}

	public function getSkuIds()
	{
		return $this->skuIds;
	}

	public function setSkuMemos($skuMemos)
	{
		$this->skuMemos = $skuMemos;
		$this->apiParas["sku_memos"] = $skuMemos;
	}

	public function getSkuMemos()
	{
		return $this->skuMemos;
	}

	public function setSkuPrices($skuPrices)
	{
		$this->skuPrices = $skuPrices;
		$this->apiParas["sku_prices"] = $skuPrices;
	}

	public function getSkuPrices()
	{
		return $this->skuPrices;
	}

	public function setSkuProperties($skuProperties)
	{
		$this->skuProperties = $skuProperties;
		$this->apiParas["sku_properties"] = $skuProperties;
	}

	public function getSkuProperties()
	{
		return $this->skuProperties;
	}

	public function setSkuQuantities($skuQuantities)
	{
		$this->skuQuantities = $skuQuantities;
		$this->apiParas["sku_quantities"] = $skuQuantities;
	}

	public function getSkuQuantities()
	{
		return $this->skuQuantities;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.itemextra.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->desc,25000,"desc");
		RequestCheckUtil::checkMaxLength($this->feature,1000,"feature");
		RequestCheckUtil::checkMaxLength($this->memo,1000,"memo");
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
		RequestCheckUtil::checkMinValue($this->numIid,0,"numIid");
		RequestCheckUtil::checkMaxLength($this->title,100,"title");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
