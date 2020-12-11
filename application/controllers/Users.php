<?php

	class Users extends CI_Controller{

		public function register(){
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
			$this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
			$this->form_validation->set_rules('phone','Phone','required');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('password2','Confirm Password','required|matches[password]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/register',$data);
				$this->load->view('templates/footer');
			}else{
				// Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->UsersModel->register($enc_password);

				//Set Message
				$this->session->set_flashdata('user_registered','You successfully join in our Family.! Now you can Log In.');

				redirect('home');
			}
		}

		//LOGIN INTO ACCOUNT
		public function login(){

			$data['title'] = 'Log into your account';

			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run() === FALSE){

				$this->load->view('templates/header');
				$this->load->view('users/login',$data);
				$this->load->view('templates/footer');
			}else{

				//Get UserName
				$username = $this->input->post('username');
				//get and encrypt password
				$password = md5($this->input->post('password'));

				//Login User
				$user_id = $this->UsersModel->login($username,$password);

				if($user_id){
					//Create Session
					$user_data = array(

						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					//SET MESSAGE
					$this->session->set_flashdata('user_loggedIn','You are now logged in.');
					redirect('home');
				}else{
					//Set Message
					$this->session->set_flashdata('user_loggedInFailed','Login is Invalid');
					redirect('users/login');
				}
			}
		}

		//LOGOUT FROM ACCOUNT
		public function logout(){
			//Unset userdata
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');

			//SET MESSAGE
			$this->session->set_flashdata('user_loggedOut','You are now logged out!');
			redirect('users/login');
		}


		//Check is username exists
		function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists','That userrname is already taken. Please choose a differnt one.');

			if($this->UsersModel->check_username_exists($username)){
				return true;
			}else{
				return false;
			}
		}

		//Check is email exists
		function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists','That email is already taken. Please choose a differnt one.');

			if($this->UsersModel->check_email_exists($email)){
				return true;
			}else{
				return false;
			}
		}
		
	}