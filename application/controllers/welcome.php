<?php 
//Controller
//welcome
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('template'); //load libraries made earlier
        $this->load->helper('url');
    }

    
	function index()
	{
		$data=$this->template->display();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

?>