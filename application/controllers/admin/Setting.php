<?php 
	Class Setting extends MY_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('setting_model');
			
		}
		function index(){			
	        $info = $this->setting_model->get_info('1');
	        if(!$info)
	        {
	            //tạo ra nội dung thông báo
	            $this->session->set_flashdata('message', 'Không tồn tại');
	        }

	        $this->data['info'] = $info;
			$message = $this->session->flashdata('message');
			$this->data['message'] = $message;



			//load thư viện validate dữ liệu

        $this->load->library('form_validation');

        $this->load->helper('form');



        //neu ma co du lieu post len thi kiem tra

        if($this->input->post())

        {

            $this->form_validation->set_rules('ten_vi', 'Tên công ty ', 'required');
            $this->form_validation->set_rules('slogan_vi', 'Khẩu hiệu công ty ', 'required');
            $this->form_validation->set_rules('hotline', 'Hotline công ty ', 'required');
            $this->form_validation->set_rules('dienthoai', 'Điện thoại di động ', 'required');
            $this->form_validation->set_rules('email', 'Email công ty ', 'required');
            $this->form_validation->set_rules('diachi_vi', 'Địa chỉ công ty ', 'required');
            $this->form_validation->set_rules('website', 'Website công ty ', 'required');
            $this->form_validation->set_rules('toado', 'Tạo độ công ty ', 'required');
            $this->form_validation->set_rules('facebook', 'fanpage facebook ', 'required');
            $this->form_validation->set_rules('title', 'Tiêu đề seo ', 'required');
            $this->form_validation->set_rules('keywords', 'Từ khóa seo ', 'required');
            $this->form_validation->set_rules('description', 'Mô tả seo', 'required');
            $this->form_validation->set_rules('headc', 'code head ', 'required');
            $this->form_validation->set_rules('topc', 'code top ', 'required');
            $this->form_validation->set_rules('bottomc', 'code bottom ', 'required');
            //nhập liệu chính xác

            if($this->form_validation->run())

            {

                //lay ten file anh minh hoa duoc update len

                $this->load->library('upload_library');

                $upload_path = './upload/logofavicon';

                $upload_data1 = $this->upload_library->upload($upload_path, 'image_vi');

                $image_link1 = $info->logo;

                if(isset($upload_data1['file_name']))

                {

                    $image_link1 = $upload_data1['file_name'];

                }

                $upload_data = $this->upload_library->upload($upload_path, 'favicol_vi');

                $image_link = $info->favicon;

                if(isset($upload_data['file_name']))

                {

                    $image_link = $upload_data['file_name'];

                }

                

                //luu du lieu can them

                $data = array(
                    'favicon'      => $image_link,
                    'logo'      => $image_link1,
                    'company'       => $this->input->post('ten_vi'),

                    'slogan'       => $this->input->post('slogan_vi'),

                    'hotline'       => $this->input->post('hotline'),

                    'phone'       => $this->input->post('dienthoai'),

                    'email'       => $this->input->post('email'),

                    'address'       => $this->input->post('diachi_vi'),

                    'website'       => $this->input->post('website'),

                    'map'       => $this->input->post('toado'),
                    'fanpage'       => $this->input->post('facebook'),
                    'titleseo'       => $this->input->post('title'),
                    'keyseo'       => $this->input->post('keywords'),
                    'descriptseo'       => $this->input->post('description'),
                    'codehead'       => $this->input->post('headc'),
                    'codetop'       => $this->input->post('topc'),

                    'codebottom'       => $this->input->post('bottomc'),
                );

//pre($data);
                //them moi vao csdl

                if($this->setting_model->update(1, $data))

                {

                    //tạo ra nội dung thông báo

                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');

                }else{

                    $this->session->set_flashdata('message', 'Không cập nhật được');

                }

                //chuyen tới trang danh sách

                redirect(admin_url('setting'));

            }

        }
			$this->data['temp'] = 'admin/setting/index';
			$this->load->view('admin/main',$this->data);
		}
		
		
	}