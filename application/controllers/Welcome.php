<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function my_topsdk()
	{
		$this->load->add_package_path(APPPATH.'third_party/TopSdk');
		$this->load->library('Tbao');
		$this->tbao->setAppkey('21406887');
		$this->tbao->setSecret('baf2e6762c10bfac37ebfc26eb8c08c1');
		$this->tbao->setSession('62006158be9f8e0be78542cegb8ed1e5f097d22a14e820d113462038');
		$this->tbao->setRequest('TradeFullinfoGetRequest');
		$this->tbao->setFields('invoice_name,payment,seller_nick,receiver_name,receiver_mobile,tid,orders.title,orders.num,orders.total_fee,orders.payment');
		$this->tbao->setTid('1111442414625582');
		print_r($this->tbao->getData());
	}

	public function my_excel()
	{
		$this->load->add_package_path(APPPATH.'third_party/PHPExcel');
		$this->load->library('Excel');//导出excel
		//设置导出文件名称
		$this->excel->setExcelTitle("test");
		//设置表头,顺序依次
		$fields = array('shop_nick'=>'店铺名称','store_name'=>'库房名称','name'=>'商品名称','VENDIBLE'=>'可销库存');
		$this->excel->setExcelFields($fields);
		$this->excel->setExcelName("测试导表");
		//生成excel前插入一条数据
		$this->excel->getOneRecord();
		$data = array();
		$data[] = array('shop_nick'=>'创维官方旗舰店','store_name'=>'北京B27','name'=>'测试商品','VENDIBLE'=>'105');
		$data[] = array('shop_nick'=>'创维官方旗舰店','store_name'=>'佛山B29','name'=>'测试商品','VENDIBLE'=>'211');
		echo $this->excel->extraExcel($data);
	}
}
