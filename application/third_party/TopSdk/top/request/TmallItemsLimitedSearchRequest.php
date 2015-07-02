<?php
/**
 * TOP API: tmall.items.limited.search request
 * 
 * @author auto create
 * @since 1.0, 2013.05.24
 */
class TmallItemsLimitedSearchRequest
{
	/** 
	 * 商品标签。；品牌特卖商品库：3458；天猫原创商品库：4801; 不再支持 天猫精品库：8578
	 **/
	private $auctionTag;
	
	/** 
	 * 品牌的id。点击某品牌类目的时候会出现。
	 **/
	private $brand;
	
	/** 
	 * 前台类目id，支持多选过滤，cat=catid1,catid2
	 **/
	private $cat;
	
	/** 
	 * 过滤搭配减价宝贝时，combo=1
	 **/
	private $combo;
	
	/** 
	 * 商品最高价格
	 **/
	private $endPrice;
	
	/** 
	 * 固定参数from=wm，描述该请求来自无线客户端。请不要填写其他值。
	 **/
	private $from;
	
	/** 
	 * 宝贝卖家所在地，中文gbk编码
	 **/
	private $loc;
	
	/** 
	 * 是否多倍积分，1为多倍积分
	 **/
	private $manyPoints;
	
	/** 
	 * 过滤折扣宝贝时，miaosha=1
	 **/
	private $miaosha;
	
	/** 
	 * 是否包邮，-1为包邮
	 **/
	private $postFee;
	
	/** 
	 * 以“属性id：属性值”的形式传入
	 **/
	private $prop;
	
	/** 
	 * 表示搜索的关键字，例如搜索query=nike。当输入关键字为中文时，将对他进行URLEncode的UTF-8格式编码，如 耐克，那么q=%E8%80%90%E5%85%8B。
	 **/
	private $q;
	
	/** 
	 * 排序类型。类型包括：
s: 人气排序
p: 价格从低到高;
pd: 价格从高到低;
d: 月销量从高到低;
td: 总销量从高到低;
pt: 按发布时间排序.
	 **/
	private $sort;
	
	/** 
	 * 表示查询起始位置，默认从第0条开始，start=10,表示从第10条数据开始查询，start不得大于110
	 **/
	private $start;
	
	/** 
	 * 商品最低价格
	 **/
	private $startPrice;
	
	/** 
	 * 是否货到付款，1为货到付款
	 **/
	private $supportCod;
	
	/** 
	 * 过滤vip宝贝时，vip=1
	 **/
	private $vip;
	
	/** 
	 * 显示旺旺在线卖家的宝贝时，wwonline=1
	 **/
	private $wwonline;
	
	private $apiParas = array();
	
	public function setAuctionTag($auctionTag)
	{
		$this->auctionTag = $auctionTag;
		$this->apiParas["auction_tag"] = $auctionTag;
	}

	public function getAuctionTag()
	{
		return $this->auctionTag;
	}

	public function setBrand($brand)
	{
		$this->brand = $brand;
		$this->apiParas["brand"] = $brand;
	}

	public function getBrand()
	{
		return $this->brand;
	}

	public function setCat($cat)
	{
		$this->cat = $cat;
		$this->apiParas["cat"] = $cat;
	}

	public function getCat()
	{
		return $this->cat;
	}

	public function setCombo($combo)
	{
		$this->combo = $combo;
		$this->apiParas["combo"] = $combo;
	}

	public function getCombo()
	{
		return $this->combo;
	}

	public function setEndPrice($endPrice)
	{
		$this->endPrice = $endPrice;
		$this->apiParas["end_price"] = $endPrice;
	}

	public function getEndPrice()
	{
		return $this->endPrice;
	}

	public function setFrom($from)
	{
		$this->from = $from;
		$this->apiParas["from"] = $from;
	}

	public function getFrom()
	{
		return $this->from;
	}

	public function setLoc($loc)
	{
		$this->loc = $loc;
		$this->apiParas["loc"] = $loc;
	}

	public function getLoc()
	{
		return $this->loc;
	}

	public function setManyPoints($manyPoints)
	{
		$this->manyPoints = $manyPoints;
		$this->apiParas["many_points"] = $manyPoints;
	}

	public function getManyPoints()
	{
		return $this->manyPoints;
	}

	public function setMiaosha($miaosha)
	{
		$this->miaosha = $miaosha;
		$this->apiParas["miaosha"] = $miaosha;
	}

	public function getMiaosha()
	{
		return $this->miaosha;
	}

	public function setPostFee($postFee)
	{
		$this->postFee = $postFee;
		$this->apiParas["post_fee"] = $postFee;
	}

	public function getPostFee()
	{
		return $this->postFee;
	}

	public function setProp($prop)
	{
		$this->prop = $prop;
		$this->apiParas["prop"] = $prop;
	}

	public function getProp()
	{
		return $this->prop;
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

	public function setSort($sort)
	{
		$this->sort = $sort;
		$this->apiParas["sort"] = $sort;
	}

	public function getSort()
	{
		return $this->sort;
	}

	public function setStart($start)
	{
		$this->start = $start;
		$this->apiParas["start"] = $start;
	}

	public function getStart()
	{
		return $this->start;
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

	public function setSupportCod($supportCod)
	{
		$this->supportCod = $supportCod;
		$this->apiParas["support_cod"] = $supportCod;
	}

	public function getSupportCod()
	{
		return $this->supportCod;
	}

	public function setVip($vip)
	{
		$this->vip = $vip;
		$this->apiParas["vip"] = $vip;
	}

	public function getVip()
	{
		return $this->vip;
	}

	public function setWwonline($wwonline)
	{
		$this->wwonline = $wwonline;
		$this->apiParas["wwonline"] = $wwonline;
	}

	public function getWwonline()
	{
		return $this->wwonline;
	}

	public function getApiMethodName()
	{
		return "tmall.items.limited.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->start,110,"start");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
