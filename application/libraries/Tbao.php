<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');

define('TOP_SDK_BASE_DIR', APPPATH . 'third_party/TopSdk/');
require TOP_SDK_BASE_DIR . 'TopSdk.php';

Class Tbao
{
	private $CI;
	private $top_cilent;
	private $app_key;
	private $secret_key;
	private $session_key;
	private $_req = null;
	private $format = 'array';

	function __construct($_options = array())
	{
		$this->CI =& get_instance();
		if($_options)
		{
			$this->app_key= $_options['app_key'];
			$this->secret_key= $_options['secret_key'];
			$this->session_key= $_options['session_key'];
		}
		$this->top_cilent = new TopClient;
		//创建SDK对象
		if (in_array($this->format, array('xml', 'json'))) {
			$this->top_cilent->format = $this->format;
		}
		$this->top_cilent->appkey = $this->app_key;
		$this->top_cilent->secretKey = $this->secret_key;
		log_message('debug', 'TopSdk Class Initialized');
	}

	// ------------------------------------------------------------------------
	
	/**
	 * __call
	 *
	 * COMMENT : __call : comment
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	public function __call($method, $args)
	{
		if (!is_object($this->_req)) {
			throw new Exception('没有初始化请求方法', 1);
		}
		//var_dump($args);
        if(method_exists($this->_req, $method))
        {
            $this->_req->$method($args[0]);
        }
	}
	function setAppkey($app_key)
	{
		if(!empty($app_key))
			$this->top_cilent->appkey = $app_key;
	}
	
	function setSecret($appsecret)
	{
		if(!empty($appsecret))
			$this->top_cilent->secretKey = $appsecret;
	}
	
	function setSession($session)
	{
		$this->session_key = $session;
	}
	// ------------------------------------------------------------------------
	
	/**
	 * initialize
	 *
	 * COMMENT : initialize : comment
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	public function initialize($config = array())
	{
		foreach ($config as $key => $val)
		{
			if (isset($this->$key))
			{
				$this->$key = $val;
			}
		}
	}

	// ------------------------------------------------------------------------
	
	/**
	 * get_object_vars_final
	 *
	 * COMMENT : get_object_vars_final : comment
	 *
	 * @access	private
	 * @param	string
	 * @return	bool
	 */
    private function _get_object_vars_final ($obj)
    {
        if (is_object($obj)) {
            $obj = get_object_vars($obj);
        }

        if (is_array($obj)) {
            foreach ($obj as $key => $value) {
                $obj[$key] = $this->_get_object_vars_final($value);
            }
        }
        return $obj;
    }	

	// ------------------------------------------------------------------------
	
	/**
	 * getData
	 *
	 * COMMENT : getData : comment
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	public function getData()
	{
		$resp = $this->top_cilent->execute($this->_req,$this->session_key);
        if ('array' == $this->format) {	
			$resp = $this->_get_object_vars_final($resp);
		}
		return $resp;
	}

	// ------------------------------------------------------------------------
	
	/**
	 * setRequest
	 *
	 * COMMENT : setRequest : 设置调用方法
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	public function setRequest($request = '')
	{
		//$request = $this->to_camel_case($request);
		$allow_requests = $this->_get_all_request();
		if (!in_array($request, $allow_requests)) {
			throw new Exception('不支持当前请求方法', 1);
			return FALSE;
		}
		$this->_req = new $request;
		return TRUE;
	}

	// ------------------------------------------------------------------------
	
	/**
	 * _get_all_request
	 *
	 * COMMENT : _get_all_request : 获取所有支持的请求
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	public function _get_all_request()
	{
		$_requests = array();
		foreach (glob(TOP_SDK_BASE_DIR.'top/request/*.php') as $filename) {
		    $_requests[] = preg_replace('#.php$#', '', basename($filename)) ;
		}
		return $_requests;
	}

}