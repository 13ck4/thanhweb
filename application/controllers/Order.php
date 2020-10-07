<?php 
	Class Order extends MY_Controller{
		
		function __construct(){
			parent::__construct();
		}
		//Nhap thong tin cua khach hang
		function checkout(){
			$this->data['title'] = "Thanh toán";
			//lay thong tin gio hang
			$carts = $this->cart->contents();
			//tong so san pham co trong gio hang.
			$total_items = $this->cart->total_items();

			if($total_items  <= 0){
				redirect();
			}

			//tong số tiền cấn thanh toán
			$total_amount = 0;
			foreach($carts as $row){
				$total_amount = $total_amount + $row['subtotal'];
			}
			$this->data['total_amount'] = $total_amount;
			
			//neu thanh vien da dang nhap thy lay thong tin cua thanh vien
			$user_id = 0;
			$user = '';
			if($this->session->userdata('user_id_login')){
				//lay thong tin cua thanh vien
				$user_id = $this->session->userdata('user_id_login');
				$user = $this->user_model->get_info($user_id);
			}
			$this->data['user'] = $user;

			$this->load->library('form_validation');
			$this->load->helper('form');
			if($this->input->post()){
				$this->form_validation->set_rules('email', 'Email nhận hàng', 'required|valid_email');
				$this->form_validation->set_rules('name', 'Tên', 'required|min_length[8]');
				$this->form_validation->set_rules('phone', 'Số điện thoại', 'required');
				$this->form_validation->set_rules('message', 'Ghi Chú', 'required');
				$this->form_validation->set_rules('payment', 'Cổng thanh toán', 'required');

				if($this->form_validation->run()){

					$payment = $this->input->post('payment');
					$data = array(
						'status'   => 0,//trang thai chưa thanh toán
						'user_id'  => $user_id, //id cua thành viên mua hàng nếu đã đăng nhập
						'user_email'    => $this->input->post('email'),
						'user_name'     => $this->input->post('name'),
						'user_phone'    => $this->input->post('phone'),
						'message'  => $this->input->post('message'),//ghi chu khi mua hang
						'amount'   => $total_amount,//tổng tiền cần thanh toán
						'payment'  => $payment,//cổng thanh toán
					);
					//them du lieu vao bang transaction
					$this->load->model('transaction_model');
					$this->transaction_model->create($data);
					$transaction_id = $this->db->insert_id(); //lay ra id cua giao dich vua them vao

					//them vao bang order
					$this->load->model('order_model');
					foreach($carts as $row){
						$data = array(
							'transaction_id' => $transaction_id,
							'product_id'     => $row['id'],
							'qty'     		 => $row['qty'],
							'amount'     	 => $row['subtotal'],
							'status'         => 0,	
							'size'           => $row['size'],
						);
						$this->order_model->create($data);
					}

					////xu li gui mail cho khach hang

							//mai gui tin cho khach hang , khi khach hang chon mua tour do
						    $email = 'luatnguyen13ck4@gmail.com';
						    //mat khau cua email
						    $pass = 'mogkmzwrykexcduu';
						    //ten nguoi gui mail 
						    $name_email = 'luat nguyen';

						    //tao bien luu email khach hang  
						    $cus_email = $this->input->post('email');

							

						    // $carts = $this->cart->contents();
							
							$price = "";
							$name = "";
							$content = "Cảm ơn bạn đã ghé thăm website chúng tôi, bạn đã mua thành công , giỏ hàng của bạn có các sản phẩm là : ";

							foreach($carts as $row){
								$content .=  $row['name'].', ';
								$price = $row['subtotal'];
							}
							//tieu de mail
							$title_email = 'Đặt hàng thành công !!';
							//noi dung mail
							$content .= " với tổng tiền là ".$price." vnđ.";

							// echo $this->sendmail($email,$pass,$name_email,$cus_email,$content,$title_email);

							// die();
						    if($this->sendmail($email,$pass,$name_email,$cus_email,$content,$title_email) == 1){
						    	// echo "herre";
						    	// die();
						    	//xoa toan bo gio hang
			                	$this->cart->destroy();
			                	//hien thi thong bao
				               	//$this->session->set_flashdata('message', 'Bạn Đã Đặt hàng thành công thành công !');
						    }else{
						    		echo "request don't";
						    		die();
						    }


					//xoa toan bo gio hang
                	if($payment == 'offline'){
                		//hien thi thong bao
	                	$this->session->set_flashdata('message', 'Bạn Đã Đặt hàng thành công thành công !');
	                	//chuyen ve trang chu
						redirect(site_url());
                	}
                	else if($payment == 'atcomputer'){
                		//hien thi thong bao
	                	$this->session->set_flashdata('message', 'Bạn Đã Đặt hàng thành công thành công !');
	                	//chuyen ve trang chu
						redirect(site_url());
                	}
                	else if($payment == 'atpostoffice'){
                		//hien thi thong bao
	                	$this->session->set_flashdata('message', 'Bạn Đã Đặt hàng thành công thành công !');
	                	//chuyen ve trang chu
						redirect(site_url());
                	}

                	//neu thanh toan = cong thanh toan
                	else if(in_array($payment, array('nganluong', 'baokim'))){
                		//load thu vien thanh toan
                		$this->load->library('payment/'.$payment.'_payment');
                		//chuyen sang trang thanh toan
                		$this->{$payment.'_payment'}->$payment($transaction_id, $total_amount);
                	}
                	
				}
			}

			//hien thi ra view
			$this->data['temp'] = "site/order/checkout";
			$this->load->view('site/layout', $this->data);
		}
		//nhan ket qa tra ve tu cong thanh toan
		function result(){
			//load thu vien thanh toan
			$this->load->library('payment/baokim_payment');
			$this->load->model('transaction_model');
			//id cua giao dich
			$transaction_id = $this->input->post('order_id');
			//lay thong tin cua giao dich.
			$transaction = $this->model->transaction_model->get_info($transaction_id);
			if(!$transaction){
				redirect();
			}
			//goi toi ham kiem tra trang thai thanh toan ben bao kim
			$status = $this->baokim_payment->result($transaction_id, $transaction->amount);
			if($status == true){
				//cap nhat lai trang thai don hang la da thanh toan
				$data = array();
				$data['status'] = 1;
				$this->transaction_model->update($transaction_id, $data);

			}else if($status == false){
				//cap nhat lai trang thai don hang la khong thanh toan
				$data = array();
				$data['status'] = 2;
				$this->transaction_model->update($transaction_id, $data);

			}
		}
	}