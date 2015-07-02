<?php

/**
 * tmc消息
 * @author auto create
 */
class TmcPublishMessage
{
	
	/** 
	 * 关联的用户id
	 **/
	public $associatedUserId;
	
	/** 
	 * 关联的用户nick
	 **/
	public $associatedUserNick;
	
	/** 
	 * 消息内容的JSON表述，必须按照topic的定义来填充
	 **/
	public $content;
	
	/** 
	 * 消息的扩增属性，用json格式表示
	 **/
	public $jsonExContent;
	
	/** 
	 * 回传的图片内容
	 **/
	public $mediaContent;
	
	/** 
	 * 消息发布时间
	 **/
	public $publishTime;
	
	/** 
	 * 发送方appkey
	 **/
	public $publisherAppKey;
	
	/** 
	 * 直发消息需要传入目标appkey
	 **/
	public $targetAppKey;
	
	/** 
	 * 目标组信息
	 **/
	public $targetGroup;
	
	/** 
	 * 消息类型
	 **/
	public $topic;	
}
?>