<?php
/**
 * TOP API: taobao.itemcat.features.get request
 * 
 * @author auto create
 * @since 1.0, 2014.04.01
 */
class ItemcatFeaturesGetRequest
{
	/** 
	 * 属性的Key，支持多条，以“,”分隔
h_videoshow（该类目是否能发视频） 
sameProductLimit（该类目下产品限制） 
cod（该类目下是否货到付款） 
auto_fill（该类目是否卖家代充）
item_must_image(该类目下的商品是否是主图必传)……
	 **/
	private $attrKeys;
	
	/** 
	 * 类目ID
	 **/
	private $cid;
	
	private $apiParas = array();
	
	public function setAttrKeys($attrKeys)
	{
		$this->attrKeys = $attrKeys;
		$this->apiParas["attr_keys"] = $attrKeys;
	}

	public function getAttrKeys()
	{
		return $this->attrKeys;
	}

	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function getApiMethodName()
	{
		return "taobao.itemcat.features.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->attrKeys,"attrKeys");
		RequestCheckUtil::checkNotNull($this->cid,"cid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
