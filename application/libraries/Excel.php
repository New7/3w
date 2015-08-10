<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *		Codeigniter PHPExcel扩展
 *		
 *		导出：
 *		$this->load->add_package_path(APPPATH.'third_party/PHPExcel');
 *		$this->load->library('Excel');
 *		//设置导出文件名称
 *		$this->excel->setExcelTitle('test');
 *		//设置表头
 *		$this->excel->setExcelFields(array('shop_nick'=>'店铺名称','store_name'=>'库房名称','name'=>'商品名称','VENDIBLE'=>'可销库存'));
 *		//如果需要保存生成记录，则需在生成设置表格记录名
 *		//$this->excel->setExcelName('测试导表');
 *		//如果需要保存生成记录，则需在生成excel前创建一条记录
 *		//$this->excel->getOneRecord();
 *		$data = array();
 *		$data[] = array('shop_nick'=>'创维官方旗舰店','store_name'=>'北京B27','name'=>'测试商品','VENDIBLE'=>'105');
 *		$data[] = array('shop_nick'=>'创维官方旗舰店','store_name'=>'佛山B29','name'=>'测试商品','VENDIBLE'=>'211');
 *		$this->excel->extraExcel($data);
 * 
 *		读取Excel文件：
 *		如果是通过$_FILES上传的文件，需先调用下面的方法，把文件转移并临时保存一下
 *		$filepath = $this->excel->moveExcel();
 *		//传入表格文件地址，读取，获得数组
 *		$data = $this->excel->readExcel($filepath);
 */
define('PHPExcel_BASE_DIR', APPPATH . 'third_party/');
require PHPExcel_BASE_DIR . 'PHPExcel.php';

class Excel
{
	
	//定义传值参数
	private $CI;
	public $_excelTitle;
	public $_excelName;
	public $_excelFields;
	private $_excelId;
	private $_excelRecordSaveType = 'none';//支持database,file，也可随便填其他，即代表不保存，可以自行保存
	const EXCELFILE_PATH = 'excelFiles/';	//定义常量Excel路径

	/**
	 * 构造函数
	 * @param array $conf 文件名称,标题和导出内容，用于导出excel
	 */
	
	function __construct()
	{	
		$this->CI =& get_instance();	
		set_time_limit(300);
		ini_set('memory_limit','256M');
		//判断是否存在excel文件的根目录
		$this->checkFloderExists(self::EXCELFILE_PATH);
	}
	
	/**
	 * 设置导出文件记录名称
	 * @param array $_excelTitle 导出文件的记录名称
	 */
	public function setExcelTitle($_excelTitle)
	{
		if($_excelTitle)
			$this->_excelTitle = $_excelTitle;
	}
	/**
	 * 设置导出文件的列头
	 * @param array $_excelFields 导出文件的列头
	 */
	public function setExcelFields($_excelFields)
	{
		if($_excelFields)
			$this->_excelFields = $_excelFields;
	}
	/**
	 * 设置导出文件名称
	 * @param array $_excelName 导出文件的名称
	 */
	public function setExcelName($_excelName)
	{
		if($_excelName)
			$this->_excelName = $_excelName;
	}
	/**
	 * excel导出方法
	 * @param array $content 导出内容
	 */
	public function extraExcel($content)
	{
		if(!$this->_excelId && in_array($this->_excelRecordSaveType,array('database','file'))){
			$this->_halt('You must create a record with getOneRecord() first!');
		}
		//参数是否存在
		if(empty($this->_excelTitle) || empty($this->_excelFields)|| empty($content)){
			$this->_halt('excelTitle,excelFields,content can not be empty!');
		}

		// 创建PHPExcel对象    
		$objPHPExcel = new PHPExcel(); 
		
		// 设置excel文件名称   
		$objPHPExcel->getProperties()->setTitle($this->_excelTitle);    
		// 设置当前工作表    
		$objPHPExcel->setActiveSheetIndex(0);    

		//设置宽width
		//$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
		//$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(15);

		// 列编号从0开始，行编号从1开始   
		$col = 0;    
		$row = 1;   
		$objActSheet = $objPHPExcel->getActiveSheet();
		foreach($this->_excelFields as $field)   
		{
			$objActSheet->getColumnDimensionByColumn($col)->setAutoSize(true);
			$objActSheet->setCellValueByColumnAndRow($col, $row, $field);
			$objActSheet->getStyleByColumnAndRow($col, $row)->getFont()->setBold(true);
			$objActSheet->getStyleByColumnAndRow($col, $row)->getBorders()->getTop()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN );   
			$objActSheet->getStyleByColumnAndRow($col, $row)->getBorders()->getLeft()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN );   
			$objActSheet->getStyleByColumnAndRow($col, $row)->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN );   
			$objActSheet->getStyleByColumnAndRow($col, $row)->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN ); 
			$col++;    
		}
		
		//数组转为对象,自动匹配传递参数fields表头字段和内容
		$result = new StdClass;
		$ccol=0;
		foreach($content as $key=>$value)
		{
			$result->$key = new StdClass;
			foreach($this->_excelFields as $k=>$v)
			{
				$result->$key->$k = isset($value[$k])?$value[$k]:'';
				$ccol++;	
			}
		}
		// 从第二行开始输出数据内容   
		$row = 2;    
		foreach($result as $data)    
		{      			
			$col = 0;
			foreach ($this->_excelFields as $field=>$name)
			{
				if(is_numeric($data->$field) && strlen($data->$field) < 12 && (substr($data->$field,0,1) != 0 || $data->$field <= 0))
					$objActSheet->setCellValueExplicitByColumnAndRow($col, $row, $data->$field,PHPExcel_Cell_DataType::TYPE_NUMERIC);
				else
					$objActSheet->setCellValueExplicitByColumnAndRow($col, $row, $data->$field,PHPExcel_Cell_DataType::TYPE_STRING);
				$col++;
			}
			$row++;    
		}       
		 //输出excel文件

		//实例化excel写方法,并调用函数
		$PHPExcel2007 = new PHPExcel_Writer_Excel2007();
		$PHPWriter = $PHPExcel2007->setPHPExcel($objPHPExcel);

		//判断文件夹是否存在，如果不存在就创建新的文件夹
		$savePath = self::EXCELFILE_PATH.date('Ymd').'/';
		$this->checkFloderExists($savePath);

		//设置文件名 
		list($usec, $sec) = explode(' ', microtime());
		$tail = date('YmdHis').str_replace('0.','',$usec);
		$fileName = $savePath.mb_convert_encoding($this->_excelTitle, 'GB2312', 'UTF-8').'_'.$tail.'.xlsx'; 
		$downUrl = $savePath.$this->_excelTitle.'_'.$tail.'.xlsx';

		//导出的文件
		$PHPWriter->save($fileName);

		$this->setFinished($downUrl);
		return $downUrl;
	} 

	/**
	 * excel移动
	 * 必须有$_FILES上传的文件才能移动
	 * 而且目前只能移动到固定目录下
	 */
	public function moveExcel($name='')
	{
		if(empty($_FILES)){
			return FALSE;
		}
		$extend = pathinfo($_FILES['file']['name']);  
		$filePath = self::EXCELFILE_PATH.'tempfiles/';
		$this->checkFloderExists($filePath);
		$fileName = empty($name)?date('YmdHis').'code.'.$extend['extension']:$name.'.'.$extend['extension'];
		move_uploaded_file($_FILES['file']['tmp_name'],$filePath . $fileName);
		return $filePath . $fileName;
	}
	/**
	 * excel读取方法
	 */
	public function readExcel($file = '')
	{
		if(!file_exists($file))
			$this->_halt('Can not find excelfile!');
		$PHPExcel = new PHPExcel();
		//读取2007格式的Excel
		$PHPReader = new PHPExcel_Reader_Excel2007();
		//为了从上向下兼容，先判断是否为2007的，再判断是否为非2007的
		if (!$PHPReader->canRead($file)) {
			//非2007格式的Excel
			$PHPReader = new PHPExcel_Reader_Excel5();
			//判断是否为正确的Excel文件
			if (!$PHPReader->canRead($file)) {
				$this->_halt('Can not read excelfile!');
			}
		}
		$PHPExcel = $PHPReader->load($file);
		//转换为数组
		$objActSheet = $PHPExcel->getActiveSheet();
		return $objActSheet->toArray();
	}

	/**
	 * 生成一条导出记录
	 */
	public function getOneRecord()
	{
		//检查保存记录类型
		$this->checkSaveType();
		//开始生成时间
		$admin_name = '';
		if($this->CI->load->is_loaded('session'))
			$admin_name = $this->CI->session->userdata('admin_name');
		$admin_name = empty($admin_name)?'PHPExcel':$admin_name;
		
		if($this->_excelRecordSaveType == 'database')
		{
			//生成状态前纪录一条数据
			$sql = ' insert into php_excel_record (excel_title,created_time,status,admin_name) 
					values(''.$this->_excelTitle.'',''.date('Y-m-d H:i:s').'','正在生成中','$admin_name')';
			$query = $this->CI->db->query($sql);
			$_excelId = $this->CI->db->insert_id();
			return $this->_excelId = $_excelId;
		}
		if($this->_excelRecordSaveType == 'file')
		{
			$record_file = self::EXCELFILE_PATH.'record_file.txt';
			file_put_contents($record_file,$this->_excelTitle.','.date('Y-m-d H:i:s').',,正在生成中,,'.$admin_name.'\r\n',FILE_APPEND);
			return $this->_excelId = count(explode('\r\n',file_get_contents($record_file)))-1;
		}
	}
	/**
	 * 设置导出记录为已完成
	 */
	private function setFinished($downUrl = '')
	{
		if($this->_excelRecordSaveType == 'database')
		{
			if($this->_excelId && $downUrl){
				//记录到生成php_excel_record表内
				$sql = ' update php_excel_record set finished_time=''.date('Y-m-d H:i:s').'',status='完成',down_url=''.$downUrl.'' where id='.$this->_excelId;
				$query = $this->CI->db->query($sql);
			}
		}
		if($this->_excelRecordSaveType == 'file')
		{
			$record_file = self::EXCELFILE_PATH.'record_file.txt';
			$data= explode('\r\n',file_get_contents($record_file));
			$temp = explode(',',$data[$this->_excelId - 1]);
			$temp[2] = date('Y-m-d H:i:s');
			$temp[3] = '完成';
			$temp[4] = $downUrl;
			$data[$this->_excelId - 1] = implode(',',$temp);
			file_put_contents($record_file,implode('\r\n',$data));
		}
	}
	/**
	 * 检查记录保存类型，判断是否满足生成表格的条件
	 */
	private function checkSaveType()
	{
		//记录保存方式 是数据库  还是 文件
		if($this->_excelRecordSaveType == 'database')
		{
			$table = $this->CI->db->query('SHOW TABLES LIKE 'php_excel_record' ')->row_array();
			//验证是否存在记录表，如果不存在则创建一个
			if(!$table){
				$this->CI->db->query('CREATE TABLE `php_excel_record` (
							  `id` int(8) NOT NULL AUTO_INCREMENT,
							  `excel_title` text NOT NULL,
							  `created_time` datetime DEFAULT NULL,
							  `finished_time` datetime DEFAULT NULL,
							  `status` varchar(32) DEFAULT NULL,
							  `down_url` varchar(500) DEFAULT NULL,
							  `admin_name` varchar(32) DEFAULT NULL,
							  PRIMARY KEY (`id`)
							) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COMMENT='生成导出数据表';');
			}
		}
		
		if($this->_excelRecordSaveType == 'file')
		{
			$record_file = self::EXCELFILE_PATH.'record_file.txt';
			if(!file_exists($record_file))
			{
				file_put_contents($record_file,'');
			}
		}
	}
	/**
	 * 检查文件夹是否存在，如果不存在，则创建一个
	 */
	private function checkFloderExists($dir)
	{
		if (!file_exists($dir)){
			/* 尝试创建目录，如果创建失败则继续循环 */
			if (@mkdir(rtrim($dir, '/'), 0777)){
				@chmod($dir, 0777);
			}
			$html = '<html><head><title>403 Forbidden</title></head><body><p>Directory access is forbidden.</p></body></html>';
			file_put_contents($dir.'/index.html',$html);
		}
	}
	//停止程序输出错误信息
	private function _halt($msg='')
	{
		exit(iconv('UTF-8','GBK',$msg));
	}
	
}