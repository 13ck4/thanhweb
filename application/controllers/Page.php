<?php 
	Class Page extends MY_Controller{
		function __construct(){
			parent::__construct();
			
		}
		function index(){
			$id = intval($this->uri->rsegment(4));
			$this->load->model('page_model');
			$where = array('id_catalog'=>$id);
			$infopage = $this->page_model->get_info_rule($where);

			if($infopage){
				$this->data['infopage'] = $infopage;
				$this->data['title'] = $infopage->title; 
				$this->data['temp'] = 'site/page/index';
			}
			
			$this->load->view('site/layout', $this->data);

		}
	}