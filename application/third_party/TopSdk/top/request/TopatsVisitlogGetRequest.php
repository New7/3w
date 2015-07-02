<?php
/**
 * TOP API: taobao.topats.visitlog.get request
 * 
 * @author auto create
 * @since 1.0, 2013.01.04
 */
class TopatsVisitlogGetRequest
{
	/** 
	 * 需要获取访问日志的日期，格式为：yyyyMMdd，取值范围：前7天内~今天
	 **/
	private $day;
	
	/** 
	 * 取今天某个时间段的数据，可先值为：0-6，6-12，12-18，18-24。<span style="color:red">注：只有取今天的数据时才支持分时段获取，取昨天以前的数据时本参数无效；取今天数据时，提交任务的时间必须在选定的period区间结束时间之前，如当前时间是10:30，处在6-12时间段内，则period可选值为6-12，12-18，18-24。</span>
	 **/
	private $period;
	
	private $apiParas = array();
	
	public function setDay($day)
	{
		$this->day = $day;
		$this->apiParas["day"] = $day;
	}

	public function getDay()
	{
		return $this->day;
	}

	public function setPeriod($period)
	{
		$this->period = $period;
		$this->apiParas["period"] = $period;
	}

	public function getPeriod()
	{
		return $this->period;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.visitlog.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->day,"day");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
