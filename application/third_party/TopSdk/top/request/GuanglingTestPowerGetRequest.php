<?php
/**
 * TOP API: taobao.guangling.test.power.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.21
 */
class GuanglingTestPowerGetRequest
{
	/** 
	 * 1
	 **/
	private $agentId;
	
	/** 
	 * 1
	 **/
	private $realAgentId;
	
	private $apiParas = array();
	
	public function setAgentId($agentId)
	{
		$this->agentId = $agentId;
		$this->apiParas["agent_id"] = $agentId;
	}

	public function getAgentId()
	{
		return $this->agentId;
	}

	public function setRealAgentId($realAgentId)
	{
		$this->realAgentId = $realAgentId;
		$this->apiParas["real_agent_id"] = $realAgentId;
	}

	public function getRealAgentId()
	{
		return $this->realAgentId;
	}

	public function getApiMethodName()
	{
		return "taobao.guangling.test.power.get";
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
