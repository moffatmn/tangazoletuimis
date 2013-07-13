<?php
//tangazoletuci
//libraries
class Template{
    protected $_ci;
    function __construct() {
        $this->_ci=&get_instance();
    }
    function display($data=null){
        //index page
        //$data['_content']=  $this->_ci->load->view('template/content',$data,true);
        $data['_header']=  $this->_ci->load->view('template/header',$data,true);
        $data['_top_menu']=  $this->_ci->load->view('template/menu',$data,true);
        //$data['_navbar_index']=  $this->_ci->load->view('template/navbar_index',$data,true);
        //$data['_content_index']=  $this->_ci->load->view('template/content_index',$data,true);
        //$data['_sales']=  $this->_ci->load->view('template/sales',$data,true);
        $data['_sidebar']=  $this->_ci->load->view('template/sidebar',$data,true);
        $data['_footer']=  $this->_ci->load->view('template/footer',$data,true);
        
        $this->_ci->load->view('template.php',$data);
    }
}
?>
