<?php

/**
 * Created on: 2015-07-08 by zxd 
 * @author zxd
 */
class Welcome_Model extends MY_Model {

	private $_table_name = 'wlbitem';

    public function __construct() {
        parent::__construct($this->_table_name);
    }

    
}

/* End of file access.php */
/* Location: ./application/models/access.php */
