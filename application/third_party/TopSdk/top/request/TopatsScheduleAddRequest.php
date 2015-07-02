<?php
/**
 * TOP API: taobao.topats.schedule.add request
 * 
 * @author auto create
 * @since 1.0, 2014.03.31
 */
class TopatsScheduleAddRequest
{
	/** 
	 * 表示本次调用是否tql调用。false则表示为rest API调用。
	 **/
	private $isTql;
	
	/** 
	 * 所有涉及的业务参数
	 **/
	private $scheduleParams;
	
	private $apiParas = array();
	
	public function setIsTql($isTql)
	{
		$this->isTql = $isTql;
		$this->apiParas["is_tql"] = $isTql;
	}

	public function getIsTql()
	{
		return $this->isTql;
	}

	public function setScheduleParams($scheduleParams)
	{
		$this->scheduleParams = $scheduleParams;
		$this->apiParas["schedule_params"] = $scheduleParams;
	}

	public function getScheduleParams()
	{
		return $this->scheduleParams;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.schedule.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isTql,"isTql");
		RequestCheckUtil::checkNotNull($this->scheduleParams,"scheduleParams");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
