<?php
/**
 * TOP API: taobao.topats.trades.history.get request
 * 
 * @author auto create
 * @since 1.0, 2013.08.21
 */
class TopatsTradesHistoryGetRequest
{
	/** 
	 * 结果文件的编码格式。</br>

传入该参数，则表示调用这个API的时候，以该参数指定的编码格式来生成结果文件。</br>

目前只支持utf-8和gbk，若没有传入该参数，则采用默认的utf-8编码格式来生成结果文件。</br>
	 **/
	private $charset;
	
	/** 
	 * 结束时间，即查询这个时间点以前的订单。
其中(end_date - begin_date) <= 1个月。
	 **/
	private $endDate;
	
	/** 
	 * 需要返回的字段。可以指定返回的fields,导出结果会根据fields的排列顺序来生成，不属于开放字段的列表中的自输入字段，会被过虑掉。
目前提供的字段有：
seller_nick, buyer_nick, title, type, created, tid, parent_id, seller_rate, buyer_rate, status, payment, discount_fee, adjust_fee, post_fee, total_fee, pay_time, end_time, modified, consign_time, buyer_obtain_point_fee, point_fee, real_point_fee, received_payment, commission_fee, pic_path, num_iid, num, price, cod_fee, cod_status, shipping_type, receiver_name, receiver_state, receiver_city, receiver_district, receiver_address, receiver_zip, receiver_mobile, receiver_phone，seller_flag
	 **/
	private $fields;
	
	/** 
	 * 开始时间，即查询这个时间点以后的订单。
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setCharset($charset)
	{
		$this->charset = $charset;
		$this->apiParas["charset"] = $charset;
	}

	public function getCharset()
	{
		return $this->charset;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.trades.history.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
