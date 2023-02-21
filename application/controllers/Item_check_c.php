<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_check_c extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

		$this->layout = '/template/main';
		// $this->layout = '/template/blank';
		$this->ip_address = $_SERVER['REMOTE_ADDR'];
		$datetimelocal = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
		$this->datetime = $datetimelocal->format('Y-m-d H:i:s');
		$this->url = $this->uri->segment(1);
		$this->session_array = $this->session->all_userdata();
		$this->npk = $this->session_array['NPK'];
		if (!$this->npk) {
			redirect(base_url('index/6'));
		}
	}

	public function index()
	{
        $this->load->view($this->layout, $data);
	}

	public function update(){
		//!asdsahdsad
		//?aksdhsalkdjsad
		//TODO :
	}

}
