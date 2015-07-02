<?php
/**
 * TOP API: taobao.top.monitor.station.status.put request
 * 
 * @author auto create
 * @since 1.0, 2012.10.18
 */
class TopMonitorStationStatusPutRequest
{
	/** 
	 * JSON格式监控结果集:示例
{"mul_station_status_list":{"mul_station_status":[{"monitor_project":"test","isv_app_key":"123456","monitor_url":"http://www.taobao.com/top_monitor.html","check_timestamp":"2011-12-11 19:39","station_status_list":{"station_status":[{"monitor_point":"上海电信","state":200,"response_ip":"192.168.0.1","response_time":600,"size":15.6,"speed":200,"dns_parse_time":22,"connect_time":50,"compute_time":450,"download_time":78}]}}]}}}
	 **/
	private $mulStationStatusList;
	
	private $apiParas = array();
	
	public function setMulStationStatusList($mulStationStatusList)
	{
		$this->mulStationStatusList = $mulStationStatusList;
		$this->apiParas["mul_station_status_list"] = $mulStationStatusList;
	}

	public function getMulStationStatusList()
	{
		return $this->mulStationStatusList;
	}

	public function getApiMethodName()
	{
		return "taobao.top.monitor.station.status.put";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mulStationStatusList,"mulStationStatusList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
