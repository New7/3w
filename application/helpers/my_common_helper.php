<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 加载全局文件 css，jquery，js
 * 
 * @access   public
 * @return   string   html 代码字符串
 */
function load_common() {
    $load = '';
    $load .= '<link type="text/css" rel="stylesheet" href="' . SITE_COMMON_STATIC . '/common.css" />' . "\n";
    $load .= '<link type="text/css" rel="stylesheet" href="' . SITE_RESOURCES . '/jquery-ui.css" />' . "\n";
    $load .= '<script type="text/javascript" src="' . SITE_RESOURCES . '/jquery.js"></script>' . "\n";
    $load .= '<script type="text/javascript" src="' . SITE_RESOURCES . '/jquery-ui.js"></script>' . "\n";
    $load .= '<script type="text/javascript" src="' . SITE_COMMON_STATIC . '/common.js"></script>' . "\n";
    return $load;
}

/**
 * 打印数据
 * 
 * @access   public
 * @param    array     数据数组
 * @die      boolean   是否终止执行
 */
function print_d($data, $die = FALSE) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    $die ? die() : '';
}

/*
 * 过滤全局GPC的空格
 * @param  $arr  
 * @return  $arr
 */

function trim_gpc($arr) {
    if (is_array($arr)) {
        foreach ($arr as $key => $val) {
            if (is_array($val)) {
                trim_gpc($arr);
            }
            $arr[$key] = trim($val);
        }
    } else {
        $arr = trim($arr);
    }
    return $arr;
}

/*
 * @ 密码双md5加密
 * @ param $str
 * @ return $str
 */

function sas_md5($str) {
    return md5(md5($str));
}

//公共分页
function page_common($page = null, $url = null) {
    $page_config['perpage'] = $page; //每页条数
    $page_config['part'] = 2; //当前页前后链接数量
    $page_config['url'] = $url; //url
    $page_config['seg'] = 3; //参数取 index.php之后的段数，默认为3，即index.php/control/function/18 这种形式
    return $page_config;
}

//创建文件夹
function mkdirs($dir, $mode = 0777, $recursive = true) {
    if (is_null($dir) || $dir === "") {
        return FALSE;
    }
    if (is_dir($dir) || $dir === "/") {
        return TRUE;
    }
    if (mkdirs(dirname($dir), $mode, $recursive)) {
        return mkdir($dir, $mode);
    }
    return FALSE;
}

//复制图片到文件下
function file_copy($filename, $dir) {
    $dir_realpath = str_replace("system", 'wx_face', BASEPATH);
    $dir_path = explode('/', $dir);
    $dsc_name = $dir_path['1'];
    $dir_path = $dir_realpath . $dir_path['0'];
    mkdirs($dir_path);
    $f = file_get_contents($filename);
    if (!$f) {
        return false;
    } else {
        $bytes = file_put_contents($dir_path . '/' . $dsc_name, $f);
        return $bytes;
    }
}

//curl 获取图片
function getImg($url = "", $dir = "") {
    $dir_realpath = str_replace("system", 'wx_face', BASEPATH);
    $dir_path = explode('/', $dir);
    $dsc_name = $dir_path['1'];
    $dir_path = $dir_realpath . $dir_path['0'];
    mkdirs($dir_path);
    $filename = $dir_path . '/' . $dsc_name;
    //去除URL连接上面可能的引号
    //$url = preg_replace( '/(?:^['"]+|['"/]+$)/', '', $url );
    $refer = "https://mp.weixin.qq.com/";
    $hander = curl_init();
    $fp = fopen($filename, 'wb');
    curl_setopt($hander, CURLOPT_REFERER, $refer);
    curl_setopt($hander, CURLOPT_URL, $url);
    curl_setopt($hander, CURLOPT_FILE, $fp);
    curl_setopt($hander, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
    curl_setopt($hander, CURLOPT_SSL_VERIFYHOST, 2); // 从证书中检查SSL加密算法是否存在
    curl_setopt($hander, CURLOPT_SSLVERSION, 3);
    curl_setopt($hander, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
    curl_setopt($hander, CURLOPT_REFERER, $refer);
    curl_exec($hander);
    curl_close($hander);
    fclose($fp);
    return true;
}

//生成随机数
function generateRandStr($length) {
    $randstr = "";
    for ($i = 0; $i < $length; $i++) {
        $randnum = mt_rand(0, 61);
        if ($randnum < 10) {
            $randstr .= chr($randnum + 48);
        } else if ($randnum < 36) {
            $randstr .= chr($randnum + 55);
        } else {
            $randstr .= chr($randnum + 61);
        }
    }
    return $randstr;
}

//生成纯数字随机数
function rand_str($length = 32, $chars = '1234567890') {
    // Length of character list
    $chars_length = (strlen($chars) - 1);
    // Start our string
    $string = $chars{rand(0, $chars_length)};
    // Generate random string
    for ($i = 1; $i < $length; $i = strlen($string)) {
        // Grab a random character from our list
        $r = $chars{rand(0, $chars_length)};
        // Make sure the same two characters don't appear next to each other
        if ($r != $string{$i - 1})
            $string .= $r;
    }
    // Return the string
    return $string;
}

//加密
function encrypt($data, $key) {
    $key = md5($key);
    $x = 0;
    $len = strlen($data);
    $l = strlen($key);
    $char ='';
    $str = '';
    for ($i = 0; $i < $len; $i++) {
        if ($x == $l) {
            $x = 0;
        }
        $char .= $key{$x};
        $x++;
    }
    for ($i = 0; $i < $len; $i++) {
        $str .= chr(ord($data{$i}) + (ord($char{$i})) % 256);
    }
    return base64_encode($str);
}

//解密
function decrypt($data, $key) {
    $key = md5($key);
    $x = 0;
    $data = base64_decode($data);
    $len = strlen($data);
    $l = strlen($key);
    $str ='';
    $char ='';
    for ($i = 0; $i < $len; $i++) {
        if ($x == $l) {
            $x = 0;
        }
        $char .= substr($key, $x, 1);
        $x++;
    }
    for ($i = 0; $i < $len; $i++) {
        if (ord(substr($data, $i, 1)) < ord(substr($char, $i, 1))) {
            $str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));
        } else {
            $str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));
        }
    }
    return $str;
}

//用引用分类的方法
function generateTree($items){
    foreach($items as $item)
        $items[$item['pid']]['son'][$item['id']] = &$items[$item['id']];
    return isset($items[0]['son']) ? $items[0]['son'] : array();
}

//数据入库转义
function check_input($content){
    return (!get_magic_quotes_gpc())?addslashes($content):$content;
}


/**
 * 去掉空数组
 */
function remove_empty_array($array)
{
	$result = array();
	if(is_array($array) && !empty($result)){
		foreach ($array as $key=>$value){
			if(is_array($value)){
				$array[$key] = removeEmptyArray($value);
			}else{
				if(empty($value)){
					$array[$key] = "";
				}
			}
		}
	}
	$result = $array;
	return $result;
}

/**
 * 获取用户的IP地址
 */
function get_ip()
{
	$ip = '';
	if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_CLIENT_IP']))
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	else
		$ip = $_SERVER['REMOTE_ADDR'];
	return $ip;
}

/**
 * 解析xml函数
 */
function get_xml_data ($strXml) {
	$pos = strpos($strXml, 'xml');
	if ($pos) {
		$xmlCode=simplexml_load_string($strXml,'SimpleXMLElement');
		$arrayCode=get_object_vars_final($xmlCode);
		return $arrayCode ;
	} else {
		return '';
	}
}

function get_object_vars_final($obj){
	if(is_object($obj)){
		$obj=get_object_vars($obj);
	}
	if(is_array($obj)){
		if(empty($obj))
			$obj = '';
		else{
			foreach ($obj as $key=>$value){
				$obj[$key]=get_object_vars_final($value);
			}
		}
	}
	return $obj;
}
/**
 * 是否为移动设备访问
 */
function is_from_mobile()
{ 
	//return true;
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
    {
        return true;
    } 
    // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset ($_SERVER['HTTP_VIA']))
    { 
        // 找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
    } 
    // 脑残法，判断手机发送的客户端标志,兼容性有待提高
    if (isset ($_SERVER['HTTP_USER_AGENT']))
    {
        $clientkeywords = array ('nokia',
            'sony',
            'ericsson',
            'mot',
            'samsung',
            'htc',
            'sgh',
            'lg',
            'sharp',
            'sie-',
            'philips',
            'panasonic',
            'alcatel',
            'lenovo',
            'iphone',
            'ipod',
            'blackberry',
            'meizu',
            'android',
            'netfront',
            'symbian',
            'ucweb',
            'windowsce',
            'palm',
            'operamini',
            'operamobi',
            'openwave',
            'nexusone',
            'cldc',
            'midp',
            'wap',
            'mobile'
            ); 
        // 从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
        {
            return true;
        } 
    } 
    // 协议法，因为有可能不准确，放到最后判断
    if (isset ($_SERVER['HTTP_ACCEPT']))
    { 
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
        {
            return true;
        } 
    } 
    return false;
} 

/* End of file my_common_helper.php */
/* Location: ./application/helpers/my_common_helper.php */