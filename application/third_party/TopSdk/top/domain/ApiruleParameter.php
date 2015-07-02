<?php

/**
 * api请求参数具体规则结构
 * @author auto create
 */
class ApiruleParameter
{
	
	/** 
	 * 当类型为byte[]时，支持的文件类型列表，以“,”分割。
	 **/
	public $fileExts;
	
	/** 
	 * 最大长度。当类型为string、number、field_list时为字符长度，当类型为byte[]时为字节长度。
	 **/
	public $length;
	
	/** 
	 * 基本类型以“;”号分割后的最大长度。
	 **/
	public $maxListSize;
	
	/** 
	 * 当类型为number时的最大值
	 **/
	public $maxValue;
	
	/** 
	 * 当类型为number时的最小值
	 **/
	public $minValue;
	
	/** 
	 * 是否必传
	 **/
	public $must;
	
	/** 
	 * aip的参数名
	 **/
	public $name;
	
	/** 
	 * api的参数类型。目前有 string、int、number、field_list、date、boolean、price、byte[] 8种
	 **/
	public $type;	
}
?>