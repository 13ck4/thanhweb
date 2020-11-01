<?php 
	Class MY_Controller extends CI_Controller{
		
		public $data = array();
		
		function __construct(){
			parent::__construct();
			$this->load->model('setting_model');
			$this->load->model('menu_model');
			$controller = $this->uri->segment(1);
			switch ($controller) {
				case 'admin':
					# code...
				$this->load->helper('admin');
				$this->_check_login();
				//kiem tra xem thanh vien da dang nhap chua 
					$admin_id = $this->session->userdata('admin_id');
					$this->data['admin_id'] = $admin_id;
					//neu da dang nhap thanh cong thy lay thong tin thanh vien
					if($admin_id){
						$this->load->model('admin_model');
						$admin_info = $this->admin_model->get_info($admin_id);
						$this->data['admin_info'] = $admin_info;
					}
					break;
				
				default:
					//lay danh sach danh muc san pham.
					$this->load->model('catalog_model');
					$input = array();
					$input['where'] = array('parent_id' => 0);
					$catalog_list = $this->catalog_model->get_list($input);
					foreach($catalog_list as $row){
						$input['where'] = array('parent_id' => $row->id);
						$subs = $this->catalog_model->get_list($input);
						$row->subs = $subs;
					}
					$this->data['catalog_list'] = $catalog_list;


					//lay danh sach san pham moi
					$this->load->model('product_model');
					$input = array();
					$input['limit'] = array(9, 0);
					$product_newest = $this->product_model->get_list($input);
					$this->data['product_newest'] = $product_newest;



					$info = $this->setting_model->get_info('1');
			        if(!$info)
			        {
			            //tạo ra nội dung thông báo
			            $this->session->set_flashdata('message', 'Không tồn tại');
			        }

					$this->data['info'] = $info;
					

					//lay danh sach danh muc menu.
					$input = array();
					
					
					$input['where'] = array("status" => 1);
					$input['order'] = array('sort_order', 'ASC');

					$menu_list = $this->menu_model->get_list($input);
					
					
					foreach($menu_list as $row){
						$input['where'] = "parent_id_menu = " .$row->id." and parent_id = 0 and status = 1";

						$subs = $this->catalog_model->get_list($input);
						$row->subs = $subs;
						//echo count($row->subs);

						// pre($subs);
						foreach($subs as $rows){
							$input['where'] = array('parent_id' => $rows->id, 'status' => 1 );
							$subss = $this->catalog_model->get_list($input);
							$rows->subss = $subss;
						}
					}
					
					// die();
					$this->data['menu_list'] = $menu_list;

					//lay danh sach bai viet moi.
					$this->load->model('news_model');
					$input = array();
					$input['limit'] = array(5, 0);
					$news_list = $this->news_model->get_list($input);
					$this->data['news_list'] = $news_list;

					//kiem tra xem thanh vien da dang nhap chua 
					$user_id_login = $this->session->userdata('user_id_login');
					$this->data['user_id_login'] = $user_id_login;
					//neu da dang nhap thanh cong thy lay thong tin thanh vien
					if($user_id_login){
						$this->load->model('user_model');
						$user_info = $this->user_model->get_info($user_id_login);
						$this->data['user_info'] = $user_info;
					}


					//goi toi thu vien cart
					$this->load->library('cart');
					$this->data['total_items'] = $this->cart->total_items();
					$this->data['total'] = $this->cart->total();
					break;
			}
		}
		protected function sendmail($email,$pass,$name_email,$cus_email,$content,$title_email){
			$config = Array( 
		        'protocol' => 'smtp', 
		        'smtp_host' => 'ssl://smtp.googlemail.com', 
		        'smtp_port' => '465', 
		        'smtp_user' => $email, 
		        'smtp_pass' => $pass,
		        'mailtype'  => 'html',
		        'charset'   => 'utf-8',
		        'newline'   => "\r\n",
		    ); 


		    $this->load->library('email', $config); 
		    $this->email->set_newline("\r\n");
		    $this->email->from($email, $name_email);

		    $this->email->to($cus_email);

		    $this->email->subject($title_email);
		    //gui noi dung mail di
		    $this->email->message($content);

		    if (!$this->email->send()) {
		        return $this->email->print_debugger();
		    }
		    else{
		    	return 1;
		    }
		}
		private function _check_login(){
			$controller = $this->uri->rsegment('1');
			$controller = strtolower($controller);

			$login = $this->session->userdata('login');
			if(!$login  && $controller != 'login'){
				redirect(admin_url('login'));
			}
			if($login && $controller == 'login'){
				redirect(admin_url('home'));
			}else if(!in_array($controller, array('login', 'home'))){
				// kiem tra quyen
				$admin_id = $this->session->userdata('admin_id');
				
				$admin_root = $this->config->item('root_admin');
				
				if($admin_id != $admin_root){
					
					$permissions_admin = $this->session->userdata('permissions');
					
					$controller = $this->uri->rsegment(1);
					$action = $this->uri->rsegment(2);
					$check = true;


					if(!isset($permissions_admin->{$controller})){
						$check = false;
					}

					$permissions_actions = $permissions_admin->{$controller};

					if(!in_array($action, $permissions_actions)){
						$check = false;
					}
					if(!$check){
						$this->session->set_flashdata('message1', 'Bạn Không có Quyền truy cập vào trang này !');
						redirect(base_url('admin'));
					}
				}
				

			}
		}
	}
 