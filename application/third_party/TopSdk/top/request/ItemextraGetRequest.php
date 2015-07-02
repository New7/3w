<?php
/**
 * TOP API: taobao.itemextra.get request
 * 
 * @author auto create
 * @since 1.0, 2014.03.04
 */
class ItemextraGetRequest
{
	/** 
	 * 需要返回的商品扩展对象字段，商品扩展结构体 ItemExtra中(除主表的三个字段：item_options,item_num,item_pic_url )所有字段均可返回,多个字段用','分割
	 **/
	private $fields;
	
	/** 
	 * 商品发布者昵称
	 **/
	private $nick;
	
	/** 
	 * 商品数字ID，该参数必须
	 **/
	private $numIid;
	
	/** 
	 * 扩展类型. 可选值:other(其他网店);uniqlo(优衣库)。默认为other，如果输入错误会默认为other的type
	 **/
	private $type;
	
	private $apiParas = array();
	
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

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
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
		return "taobao.itemextra.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
		RequestCheckUtil::checkMinValue($this->numIid,0,"numIid");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
