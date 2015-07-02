<?php
/**
 * TOP API: alibaba.chaweizhang.violation request
 * 
 * @author auto create
 * @since 1.0, 2015.05.04
 */
class AlibabaChaweizhangViolationRequest
{
	/** 
	 * 获取验证码时获得的attach字段
	 **/
	private $attach;
	
	/** 
	 * 验证码
	 **/
	private $captcha;
	
	/** 
	 * 车牌号
	 **/
	private $carno;
	
	/** 
	 * 车辆类型，目前只支持两种：01为大型汽车；02为小型汽车
	 **/
	private $cartype;
	
	/** 
	 * 城市
	 **/
	private $city;
	
	/** 
	 * 发动机号
	 **/
	private $ecode;
	
	/** 
	 * 登记证书编号
	 **/
	private $regcertcode;
	
	/** 
	 * 车架号
	 **/
	private $vcode;
	
	private $apiParas = array();
	
	public function setAttach($attach)
	{
		$this->attach = $attach;
		$this->apiParas["attach"] = $attach;
	}

	public function getAttach()
	{
		return $this->attach;
	}

	public function setCaptcha($captcha)
	{
		$this->captcha = $captcha;
		$this->apiParas["captcha"] = $captcha;
	}

	public function getCaptcha()
	{
		return $this->captcha;
	}

	public function setCarno($carno)
	{
		$this->carno = $carno;
		$this->apiParas["carno"] = $carno;
	}

	public function getCarno()
	{
		return $this->carno;
	}

	public function setCartype($cartype)
	{
		$this->cartype = $cartype;
		$this->apiParas["cartype"] = $cartype;
	}

	public function getCartype()
	{
		return $this->cartype;
	}

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setEcode($ecode)
	{
		$this->ecode = $ecode;
		$this->apiParas["ecode"] = $ecode;
	}

	public function getEcode()
	{
		return $this->ecode;
	}

	public function setRegcertcode($regcertcode)
	{
		$this->regcertcode = $regcertcode;
		$this->apiParas["regcertcode"] = $regcertcode;
	}

	public function getRegcertcode()
	{
		return $this->regcertcode;
	}

	public function setVcode($vcode)
	{
		$this->vcode = $vcode;
		$this->apiParas["vcode"] = $vcode;
	}

	public function getVcode()
	{
		return $this->vcode;
	}

	public function getApiMethodName()
	{
		return "alibaba.chaweizhang.violation";
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
