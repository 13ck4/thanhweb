<?php 
class My404 extends MY_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
    } 

    public function index() 
    {
        $this->data['temp'] = 'site/error/404';
        $this->load->view('site/layout',$this->data);
    } 
} 