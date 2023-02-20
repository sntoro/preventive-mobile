<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_c extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

		$this->layout = '/template/main';
		$this->ip_address = $_SERVER['REMOTE_ADDR'];
		$datetimelocal = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
		$this->datetime = $datetimelocal->format('Y-m-d H:i:s');
		$this->url = $this->uri->segment(1);
		$this->session_array = $this->session->all_userdata();
		// $this->usercode = $this->session_array['USER_CODE'];
		// if (!$this->usercode) {
		// 	redirect(base_url('exp/6'));
		// }
	}

	public function index()
	{

		$data['title'] = 'Login';

        $data['content'] = 'component/menu';
        $this->load->view($this->layout, $data);

	}

	public function taskList(){
		$data['title'] = 'Login';
        $data['content'] = 'task/task-list';
        $this->load->view($this->layout, $data);
	}

	public function modal(){
		$data['title'] = 'Login';
        $data['content'] = 'component/modal';
        $this->load->view($this->layout, $data);
	}

	public function toolbar(){
		$data['title'] = 'Login';
        $data['content'] = 'component/toolbar';
        $this->load->view($this->layout, $data);
	}

	public function getById($id){
		$row_data = $this->Job_detail_m->get(['ID' => $id])->row_array();

		echo json_encode($row_data);
	}
}
