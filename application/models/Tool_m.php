<?php

class Tool_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table_tool = 'TM_TOOL';
        $this->table_item = 'TM_ITEM_CHECK';
        $this->table_job = 'TM_JOB_PLANNING';
        $this->table_method = 'TM_METHOD';
        $this->table_pic = 'TM_PIC';
        $this->table_tool_pic = 'TT_TOOL_PIC';
    }

    public function save($data)
    {
        $this->db->insert($this->table, $data);
		return $this->db->affected_rows();
	}
	
    public function update($data, $id) {
		
        $this->db->where($id);
        $this->db->update($this->table, $data);
		return $this->db->affected_rows();
	}

    public function get($where = 0)
    {
        $this->db->select("*",FALSE);
        $this->db->from($this->table_tool);
        

        if ($where)
            $this->db->where($where);
        return $this->db->get();
    }

    public function getToolPreventive($where = 0)
    {
        $this->db->select("*",FALSE);
        $this->db->from("$this->table_tool TOOL");
        $this->db->join("$this->table_item ITEM", "ITEM.INT_TOOL_ID = TOOL.INT_ID");
        $this->db->join("$this->table_job JOB", "JOB.INT_ITEM_CHECK_ID = ITEM.INT_ID");

        if ($where)
            $this->db->where($where);
        return $this->db->get();
    }

    public function add_batch($data)
    {
        return $this->db->insert_batch($this->table, $data);
    }
}
