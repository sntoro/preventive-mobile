<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tool_c extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Tool_m');
		
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

	public function getById($tool_code, $item_id){
		$row_data = $this->Tool_m->getToolPreventive(['CHR_TOOL_CODE' => $tool_code]);

		if($row_data->num_rows() > 0){

			// //insert into TT_JOB 
			// $data_insert_job = array(
			// 	'INT_ITEM_ID' => $item_id,
			// 	'INT_ACTUAL_DURATION' => 0,
			// 	'INT_ACTUAL_MP' => 0,
			// 	'CHR_PERIODIC' => 0,
			// 	'CHR_MEASUREMENT' => 0,
			// );

			// $id_job = $this->Job_list_m->save($data_insert_job);

			// //TT_JOB_PLANNING
			// $data_insert_job_detail = array(
			// 	'INT_JOB_ID' => $id_job,
			// 	'INT_SEQUENCE_ITEM_CHECK' => 0,
			// 	'CHR_ITEM_CHECK_NAME' => 0,
			// 	'INT_SEQUENCE_ITEM_CHECK_DETAIL' => 0,
			// 	'CHR_ACTIVITY_NAME' => 0,
			// 	'CHR_ITEM_CHECK_DETAIL_NAME' => 0,
			// 	'INT_METHOD_ID' => 0,
			// 	'CHR_OK_STD' => 0,
			// 	'CHR_NG_STD' => 0,
			// 	'FLT_WARN_LOWER_LIMIT' => 0,
			// 	'FLT_LOWER_LIMIT' => 0,
			// 	'FLT_WARN_UPPER_LIMIT' => 0,
			// 	'FLT_UPPER_LIMIT' => 0,
			// );

			// $this->Job_detail_m->save($data_insert_job_detail);

			echo json_encode(true);
		}else{
			echo json_encode(false);
		}

	}

}
