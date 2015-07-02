<?php
/**
 * TOP API: taobao.top.hosting.warn request
 * 
 * @author auto create
 * @since 1.0, 2011.08.25
 */
class TopHostingWarnRequest
{
	/** 
	 * 虚拟机的评价带宽使用（单位时间内的网络流量），单位为kbytes/s
	 **/
	private $bandwidth;
	
	/** 
	 * 虚拟机网络流量（kbytes）
	 **/
	private $flow;
	
	/** 
	 * 指定的isv_app_key
	 **/
	private $isvAppKey;
	
	/** 
	 * 告警级别
	 **/
	private $level;
	
	/** 
	 * 1分钟负载
	 **/
	private $load1;
	
	/** 
	 * 15分钟负载
	 **/
	private $load15;
	
	/** 
	 * 5分钟负载
	 **/
	private $load5;
	
	/** 
	 * 已使用的内存大小，单位为M
	 **/
	private $memUsed;
	
	/** 
	 * 告警原因
	 **/
	private $reason;
	
	/** 
	 * 虚拟机接收到的数据流量 （kbytes）
	 **/
	private $rx;
	
	/** 
	 * VM当前的状态 running/shutdown
	 **/
	private $state;
	
	/** 
	 * 虚拟机接发送的数据流量 （kbytes）
	 **/
	private $tx;
	
	/** 
	 * VM的编号
	 **/
	private $vmNo;
	
	private $apiParas = array();
	
	public function setBandwidth($bandwidth)
	{
		$this->bandwidth = $bandwidth;
		$this->apiParas["bandwidth"] = $bandwidth;
	}

	public function getBandwidth()
	{
		return $this->bandwidth;
	}

	public function setFlow($flow)
	{
		$this->flow = $flow;
		$this->apiParas["flow"] = $flow;
	}

	public function getFlow()
	{
		return $this->flow;
	}

	public function setIsvAppKey($isvAppKey)
	{
		$this->isvAppKey = $isvAppKey;
		$this->apiParas["isv_app_key"] = $isvAppKey;
	}

	public function getIsvAppKey()
	{
		return $this->isvAppKey;
	}

	public function setLevel($level)
	{
		$this->level = $level;
		$this->apiParas["level"] = $level;
	}

	public function getLevel()
	{
		return $this->level;
	}

	public function setLoad1($load1)
	{
		$this->load1 = $load1;
		$this->apiParas["load_1"] = $load1;
	}

	public function getLoad1()
	{
		return $this->load1;
	}

	public function setLoad15($load15)
	{
		$this->load15 = $load15;
		$this->apiParas["load_15"] = $load15;
	}

	public function getLoad15()
	{
		return $this->load15;
	}

	public function setLoad5($load5)
	{
		$this->load5 = $load5;
		$this->apiParas["load_5"] = $load5;
	}

	public function getLoad5()
	{
		return $this->load5;
	}

	public function setMemUsed($memUsed)
	{
		$this->memUsed = $memUsed;
		$this->apiParas["mem_used"] = $memUsed;
	}

	public function getMemUsed()
	{
		return $this->memUsed;
	}

	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
	}

	public function setRx($rx)
	{
		$this->rx = $rx;
		$this->apiParas["rx"] = $rx;
	}

	public function getRx()
	{
		return $this->rx;
	}

	public function setState($state)
	{
		$this->state = $state;
		$this->apiParas["state"] = $state;
	}

	public function getState()
	{
		return $this->state;
	}

	public function setTx($tx)
	{
		$this->tx = $tx;
		$this->apiParas["tx"] = $tx;
	}

	public function getTx()
	{
		return $this->tx;
	}

	public function setVmNo($vmNo)
	{
		$this->vmNo = $vmNo;
		$this->apiParas["vm_no"] = $vmNo;
	}

	public function getVmNo()
	{
		return $this->vmNo;
	}

	public function getApiMethodName()
	{
		return "taobao.top.hosting.warn";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isvAppKey,"isvAppKey");
		RequestCheckUtil::checkNotNull($this->level,"level");
		RequestCheckUtil::checkNotNull($this->reason,"reason");
		RequestCheckUtil::checkNotNull($this->state,"state");
		RequestCheckUtil::checkNotNull($this->vmNo,"vmNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
