<?php
/**
 * TOP API: alibaba.basestation.cmcu.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.13
 */
class AlibabaBasestationCmcuGetRequest
{
	/** 
	 * 基站号
	 **/
	private $cell;
	
	/** 
	 * 返回的数据格式：json/xml/jsonp
	 **/
	private $dtype;
	
	/** 
	 * 进制类型，16或10，默认：10
	 **/
	private $hex;
	
	/** 
	 * 当选择jsonp格式时必须传递
	 **/
	private $jsonpCallback;
	
	/** 
	 * 小区号
	 **/
	private $lac;
	
	/** 
	 * 移动基站：0 联通基站:1 默认:0
	 **/
	private $mnc;
	
	private $apiParas = array();
	
	public function setCell($cell)
	{
		$this->cell = $cell;
		$this->apiParas["cell"] = $cell;
	}

	public function getCell()
	{
		return $this->cell;
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

	public function setJsonpCallback($jsonpCallback)
	{
		$this->jsonpCallback = $jsonpCallback;
		$this->apiParas["jsonp_callback"] = $jsonpCallback;
	}

	public function getJsonpCallback()
	{
		return $this->jsonpCallback;
	}

	public function setLac($lac)
	{
		$this->lac = $lac;
		$this->apiParas["lac"] = $lac;
	}

	public function getLac()
	{
		return $this->lac;
	}

	public function setMnc($mnc)
	{
		$this->mnc = $mnc;
		$this->apiParas["mnc"] = $mnc;
	}

	public function getMnc()
	{
		return $this->mnc;
	}

	public function getApiMethodName()
	{
		return "alibaba.basestation.cmcu.get";
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
