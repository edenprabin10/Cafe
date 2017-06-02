<?php
	
	class Customer extends CI_Controller {

		public function login() 
		{
			echo 'Login Page Buhahaha';
	}

		public function register() 
		{
			if(isset($_POST['register'])){
				$this->form_validation->set_rules('first_name','Firstname','required');

				$this->form_validation->set_rules('last_name','Lastname','required');

				$this->form_validation->set_rules('username','Username','required');

				$this->form_validation->set_rules('password','Password','required|min_length[5]');

				$this->form_validation->set_rules('repassword','Repassword','required|min_length[5]|matches[password]');

				$this->form_validation->set_rules('email','Email','required');

				$this->form_validation->set_rules('address','Address','required');

				$this->form_validation->set_rules('mobile_no','Mobile No','required');	
				

				//if form validation true

				if($this->form_validation->run() == TRUE) {
					echo 'form validated';
				}




					//add user in database
					$data = array(
						'first_name'=>$_POST['first_name'],
						'last_name'=>$_POST['last_name'],
						'username'=>$_POST['username'],
						'password'=>$_POST['password'],
						'repassword'=>$_POST['repassword'],
						'email'=>$_POST['email'],
						'address'=>$_POST['address'],
						'mobile_no'=>$_POST['mobile_no']
					);
					$this->db->insert('customer',$data);

					$this->session->set_flashdata("Sucess", "Your Account Has Been Registered. You can Login Now");
					redirect("Customer/register", "refresh");				
}			
			//load view
			$this->load->view('register');
		}

	}

