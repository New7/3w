<?php
/**
 * TOP API: taobao.itemextras.search request
 * 
 * @author auto create
 * @since 1.0, 2012.03.06
 */
class ItemextrasSearchRequest
{
	/** 
	 * 商品最高价格。单位:元。小数点后两位，取值范围:0-100000000。如果同时传入最低价和最高价，最低价要小于等于最高价
	 **/
	private $endPrice;
	
	/** 
	 * 需返回的外店商品结构字段列表。可选值为ItemExtra中的以下字段：num_iid,title,options,pic_url,reserve_price,created,modified,nick,shop_id,seller_cids,type,list_time;多个字段用“,”分隔。如：num_iid,title。
	 **/
	private $fields;
	
	/** 
	 * 卖家昵称
	 **/
	private $nick;
	
	/** 
	 * 多个商品num_iids批量搜索。最多传入40个num_iid,每个num_iid之间用“,”分隔
	 **/
	private $numIids;
	
	/** 
	 * 商品外店自定义属性查询。扩展表option，按位取与计算，每个位表示一个信息。开发者自定义参数，可以同时标记多个位
	 **/
	private $options;
	
	/** 
	 * 排序方式。格式为column:asc/desc,column可选值为: reserve_price（价格）, modified（商品修改时间）, list_time（商品上架时间）；默认是按照上架时间倒序。如按价格升序排列表示为：reserve_price:asc。
	 **/
	private $orderBy;
	
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1,即返回第一页数据。
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数;最大值:200;默认值:40。
	 **/
	private $pageSize;
	
	/** 
	 * 搜索字段。 用来搜索外店商品的title
	 **/
	private $q;
	
	/** 
	 * 卖家自定义店铺类目，每个类目id间以“，”分隔。
	 **/
	private $sellerCids;
	
	/** 
	 * 卖家店铺id
	 **/
	private $shopId;
	
	/** 
	 * 商品最低价格。单位:元。小数点后两位，取值范围:0-100000000。如果同时传入最低价和最高价，最低价要小于等于最高价
	 **/
	private $startPrice;
	
	/** 
	 * 商品类型。扩展类型 other:其他网店 ；uniqlo: 优衣库 ；tmall:北京旺店；tom:开源网店
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setEndPrice($endPrice)
	{
		$this->endPrice = $endPrice;
		$this->apiParas["end_price"] = $endPrice;
	}

	public function getEndPrice()
	{
		return $this->endPrice;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setNumIids($numIids)
	{
		$this->numIids = $numIids;
		$this->apiParas["num_iids"] = $numIids;
	}

	public function getNumIids()
	{
		return $this->numIids;
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

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
		$this->apiParas["order_by"] = $orderBy;
	}

	public function getOrderBy()
	{
		return $this->orderBy;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setQ($q)
	{
		$this->q = $q;
		$this->apiParas["q"] = $q;
	}

	public function getQ()
	{
		return $this->q;
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

	public function setStartPrice($startPrice)
	{
		$this->startPrice = $startPrice;
		$this->apiParas["start_price"] = $startPrice;
	}

	public function getStartPrice()
	{
		return $this->startPrice;
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
		return "taobao.itemextras.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
