<?php
/**
 * TOP API: alibaba.basestation.ct.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.13
 */
class AlibabaBasestationCtGetRequest
{
	/** 
	 * 基站号(bid)
	 **/
	private $cellid;
	
	/** 
	 * 当选择jsonp格式时必须传递
	 **/
	private $ctCallback;
	
	/** 
	 * 返回的数据格式：json/xml/jsonp
	 **/
	private $dtype;
	
	/** 
	 * 进制类型，16或10，默认：10
	 **/
	private $hex;
	
	/** 
	 * NID网络识别码（各地区1-3个）
	 **/
	private $nid;
	
	/** 
	 * SID系统识别码（各地区一个）
	 **/
	private $sid;
	
	private $apiParas = array();
	
	public function setCellid($cellid)
	{
		$this->cellid = $cellid;
		$this->apiParas["cellid"] = $cellid;
	}

	public function getCellid()
	{
		return $this->cellid;
	}

	public function setCtCallback($ctCallback)
	{
		$this->ctCallback = $ctCallback;
		$this->apiParas["ct_callback"] = $ctCallback;
	}

	public function getCtCallback()
	{
		return $this->ctCallback;
	}

	public function setDtype($dtype)
	{
		$this->dtype = $dtype;
		$this->apiParas["dtype"] = $dtype;
	}

	public function getDtype()
	{
		return $this->dtype;
	}

	public function setHex($hex)
	{
		$this->hex = $hex;
		$this->apiParas["hex"] = $hex;
	}

	public function getHex()
	{
		return $this->hex;
	}

	public function setNid($nid)
	{
		$this->nid = $nid;
		$this->apiParas["nid"] = $nid;
	}

	public function getNid()
	{
		return $this->nid;
	}

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function getApiMethodName()
	{
		return "alibaba.basestation.ct.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
