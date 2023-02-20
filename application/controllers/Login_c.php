<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_c extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('User_m');


		$this->layout = '/template/blank';
		$this->ip_address = $_SERVER['REMOTE_ADDR'];
		$datetimelocal = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
		$this->datetime = $datetimelocal->format('Y-m-d H:i:s');
		$this->url = $this->uri->segment(1);
		$this->session_array = $this->session->all_userdata();
		// $this->usercode = $this->session_array['NPK'];
		// if (!$this->usercode) {
		// 	redirect(base_url());
		// }
	}

	public function index($msg = null)
	{

		switch ($msg) {

            case '1':
                $data['msg'] = '<p>
                <div class="alert alert-danger text-center">
                <strong>Sign in failed!</strong> Your account doesn\'t exist.
                </div>';
                break;
            case '2':
                $data['msg'] = '<p>
                <div class="alert alert-info text-center">
                <strong>Too bad!</strong> Your account was deleted.
                </div>';
                break;
            case '3':
                $data['msg'] = '<p>
                <div class="alert alert-warning text-center">
                You have abnormally logged off. 
                Try sign in on your last computer.
                </div>';
                break;
            case '4':
                $data['msg'] = '<p>
                <div class="alert alert-warning text-center">
                <strong>Sign in failed!</strong> Your password appear to be invalid. Please try again.
                </div>';
                break;
            case '5':
                $data['msg'] = '<p>
                <div class="alert alert-danger text-center">
                Your password has expired and must be changed.
                </div>';
                break;
            case '6':
                $data['msg'] = '<p>
                <div class="alert alert-success text-center">
                Updating password was successful. Try to Login.
                </div>';
                break;
            case '7':
                $data['msg'] = '<p>
                <div class="alert alert-danger text-center">
                Your account is not active.
                </div>';
                break;
            case '8':
                $data['msg'] = '<p>
                <div class="alert alert-success text-center">
                Your account is active.
                </div>';
                break;
            default:
                $data['msg'] = NULL;
                break;
        }
        $data['title'] = 'Login';
        $data['content'] = 'login';
		$this->load->view($this->layout, $data);
	}

	public function tryLogin(){
		$usercode = $this->input->post('usercode');
		$password = $this->input->post('password');

		$data = $this->User_m->check_password($usercode, $password);

		if($data){
			redirect(base_url('Job_list_c'));
		}else{
			$this->index(1);
		}
	}

	public function logOut(){

	}

}
