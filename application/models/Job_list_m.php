<?php

class Job_list_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->tool = 'TM_TOOL';
        $this->item = 'TM_ITEM';
        $this->method = 'TM_METHOD';
        $this->pic = 'TM_PIC';
        $this->tool_pic = 'TT_TOOL_PIC';
    }

    public function save($data)
    {
        $this->db->insert($this->job, $data);
        return $this->db->insert_id();
	}
	
    public function update($data, $id) {
		
        $this->db->where($id);
        $this->db->update($this->job, $data);
		return $this->db->affected_rows();
	}

    public function get($where = 0)
    {
        $this->db->select("TOOL.INT_ID, CHR_ITEM_NAME, CHR_LOCATION, DATE_LAST_CHECKED_AT, DATE_SCHEDULE_AT, INT_DURATION, INT_MP, CHR_TOOL_NAME",FALSE);
        $this->db->from("$this->tool TOOL");
        $this->db->join("$this->item ITEM", "ITEM.INT_TOOL_ID = TOOL.INT_ID");

        if ($where)
            $this->db->where($where);
        return $this->db->get();
    }

    public function add_batch($data)
    {
        return $this->db->insert_batch($this->job, $data);
    }
}
