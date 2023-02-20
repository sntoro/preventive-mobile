<?php

class Wis_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->wis = 'TM_WIS';
        $this->tool = 'TM_TOOL';
        $this->tool_wis = 'TT_TOOL_WIS';
    }

    public function save($data)
    {
        $this->db->insert($this->wis, $data);
		return $this->db->affected_rows();
	}
	
    public function update($data, $id) {
		
        $this->db->where($id);
        $this->db->update($this->wis, $data);
		return $this->db->affected_rows();
	}

    public function get($where = 0)
    {
        $this->db->select("*, CASE WHEN CHR_EXT IN ('png','jpg') THEN 'image' ELSE 'pdf' END AS format_type",FALSE);
        $this->db->from("$this->wis WIS");
        $this->db->join("$this->tool_wis TOOL_WIS", "TOOL_WIS.INT_WIS_ID = WIS.INT_ID");
        $this->db->join("$this->tool TOOL", "TOOL_WIS.INT_TOOL_ID = TOOL.INT_ID");
        
        if ($where)
            $this->db->where($where);
        return $this->db->get();
    }

    public function add_batch($data)
    {
        return $this->db->insert_batch($this->wis, $data);
    }
}
