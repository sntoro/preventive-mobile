<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Job_list_c extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Job_list_m');
		$this->load->model('Job_detail_m');
		$this->load->model('Tool_m');
		$this->load->model('Wis_m');
		$this->load->model('Pic_m');

		$this->layout = '/template/main';
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
		$data['title'] = 'Task Detail';

		$data['data'] = $this->Job_list_m->get(['ITEM.INT_FLG_DEL' => 0, 'TOOL.INT_FLG_DEL' => 0])->result();

		$data['content'] = 'job/list';
		$this->load->view($this->layout, $data);
	}

	public function view($tool_id = null)
	{
		$data['title'] = '';

		$data['tool'] = $this->Tool_m->get(['INT_ID' => $tool_id])->row();
		$data['wis_tool'] = $this->Wis_m->get(['INT_TOOL_ID' => $tool_id, 'CHR_WIS_TYPE' => 'tool'])->result();
		$data['wis_product'] = $this->Wis_m->get(['INT_TOOL_ID' => $tool_id, 'CHR_WIS_TYPE' => 'product'])->result();
		$data['personel'] = $this->Pic_m->get(['INT_TOOL_ID' => $tool_id])->result();
		$data['data'] = $this->Job_detail_m->getGroup($tool_id)->result();

		$data['content'] = 'job/detail';
		$this->load->view($this->layout, $data);
	}

	public function getById($id, $sequence)
	{
		$row_data = $this->Job_detail_m->getDetail(['TT_JOB_PLANNING.INT_JOB_ID' => $id, 'INT_SEQUENCE_ITEM_CHECK' => $sequence])->result();

		$tools = $this->Tool_m->get(['INT_ID' => $id])->row();

		$json_data = array(
			'item_name' => $tools->CHR_ITEM_NAME,
			'data' => $row_data
		);

		echo json_encode($json_data);
	}
}
