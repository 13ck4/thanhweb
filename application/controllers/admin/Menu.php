<?php 
	Class Menu extends MY_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('menu_model');
		}
		function index(){
			$list = $this->menu_model->get_list();
			$this->data['list'] = $list;

			$message = $this->session->flashdata('message');
			$this->data['message'] = $message;

			$this->data['temp'] = 'admin/menu/index';
			$this->load->view('admin/main', $this->data);
		}
		function add(){
			$this->load->library('form_validation');
			$this->load->helper('form');
			if($this->input->post()){
				$this->form_validation->set_rules('name', 'Tên', 'required|min_length[8]');

				if($this->form_validation->run()){
					$name = $this->input->post('name');
					$status = $this->input->post('feature');
					$sort_order = $this->input->post('sort_order');
					$data = array(
						'title'     => $name,
						'status' => $status,
						'sort_order' => intval($sort_order)
					);
					if($this->menu_model->create($data)){
						$this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công !');
					}else{
						$this->session->set_flashdata('message', 'Không thêm được !');
					}
					redirect(admin_url('menu'));
				}
			}

			$input = array();
			$input['where'] = array('parent_id'=>0);
			$list = $this->menu_model->get_list($input);
			$this->data['list'] = $list;

			$this->data['temp'] = 'admin/menu/add';
			$this->load->view('admin/main',$this->data);
		}
		function edit(){
			$this->load->library('form_validation');
			$this->load->helper('form');

			$id = $this->uri->rsegment(3);
			$info = $this->menu_model->get_info($id);

			if(!$info){
				$this->session->set_flashdata('message', 'Không tồn tại danh mục này!');
				redirect(admin_url('menu'));
			}
			$this->data['info'] = $info;

			if($this->input->post()){
				$this->form_validation->set_rules('name', 'Tên', 'required|min_length[8]');

				if($this->form_validation->run()){
					$name = $this->input->post('name');
					$status = $this->input->post('status');
					$sort_order = $this->input->post('sort_order');
					$data = array(
						'title'     => $name,
						'status' => $status,
						'sort_order' => intval($sort_order)
					);
					if($this->menu_model->update($id, $data)){
						$this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công !');
					}else{
						$this->session->set_flashdata('message', 'Không cập nhật được !');
					}
					redirect(admin_url('menu'));
				}
			}

			$input = array();
			$input['where'] = array('parent_id'=>0);
			$list = $this->menu_model->get_list($input);
			$this->data['list'] = $list;

			$this->data['temp'] = 'admin/menu/edit';
			$this->load->view('admin/main',$this->data);
		}
		function delete(){
			$id = $this->uri->rsegment(3);
			$this->_del($id);
			$this->session->set_flashdata('message', 'Xóa thành công Danh Mục có mã số '.$id);
			redirect(admin_url('menu'));
		} 
		//xoa nhieu danh muc san pham
		function del_all(){
			$ids = $this->input->post('ids');
			foreach($ids as $id){
				$this->_del($id, false);
			}

		}
		//thuc hien xoa
		private function _del($id, $redirect = true){
			$info = $this->menu_model->get_info($id);

			if(!$info){
				$this->session->set_flashdata('message', 'Không tồn tại danh mục này!');
				if($redirect){
					redirect(admin_url('menu'));
				}else{
					return false;
				}
			} 


			$this->menu_model->delete($id);
		}
	}