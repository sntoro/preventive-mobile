<?php

class Job_detail_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->job = 'TT_JOB';
        $this->job_planning = 'TT_JOB_PLANNING';
        $this->tool = 'TM_TOOL';
        $this->item = 'TM_ITEM';
        $this->item_check = 'TM_ITEM_CHECK';
        $this->item_check_detail = 'TM_ITEM_CHECK_DETAIL';
        $this->method = 'TM_METHOD';
        $this->pic = 'TM_PIC';
        $this->tool_pic = 'TT_TOOL_PIC';
    }

    public function save($data)
    {
        $this->db->insert($this->job, $data);
		return $this->db->affected_rows();
	}
	
    public function update($data, $id) {
		
        $this->db->where($id);
        $this->db->update($this->job, $data);
		return $this->db->affected_rows();
	}

    public function get($where = 0)
    {
        $this->db->select("*",FALSE);
        $this->db->from($this->job_planning);

        if ($where)
            $this->db->where($where);
        return $this->db->get();
    }

    public function getGroup($tool_id){
        $data = $this->db->query("SELECT JOB.INT_ID, JOB_PLANNING.INT_SEQUENCE_ITEM_CHECK, CHR_ITEM_CHECK_NAME, TOOL.CHR_LOCATION, JOB.INT_ACTUAL_DURATION, 
        JOB.INT_ACTUAL_MP, CHR_TOOL_NAME, COUNT(CHR_ITEM_CHECK_NAME) COUNT_ITEM , ISNULL(CHECKED,0)  CHECKED
        FROM TT_JOB JOB 
        INNER JOIN TT_JOB_PLANNING JOB_PLANNING ON JOB_PLANNING.INT_JOB_ID = JOB.INT_ID 
        INNER JOIN TM_ITEM ITEM ON JOB.INT_ITEM_ID = ITEM.INT_ID 
        INNER JOIN TM_TOOL TOOL ON ITEM.INT_TOOL_ID = TOOL.INT_ID 
        
        LEFT JOIN ( 
        SELECT INT_JOB_ID, COUNT(INT_ID) AS CHECKED FROM TT_JOB_PLANNING WHERE INT_JOB_ID = $tool_id 
        AND CHR_VALUE IS NOT NULL GROUP BY INT_JOB_ID 
        ) AS A ON A.INT_JOB_ID = JOB.INT_ID 
        
        WHERE ITEM.INT_TOOL_ID = $tool_id 
        GROUP BY JOB.INT_ID, JOB_PLANNING.INT_SEQUENCE_ITEM_CHECK, CHR_ITEM_CHECK_NAME, TOOL.CHR_LOCATION,
        JOB.INT_ACTUAL_DURATION, JOB.INT_ACTUAL_MP, CHR_TOOL_NAME , CHECKED");

        return $data;
    }

    public function getDetail($where = 0)
    {
        $this->db->select("$this->job_planning.*, $this->method.CHR_METHOD_NAME",FALSE);
        $this->db->from($this->job);
        $this->db->join($this->job_planning, "$this->job_planning.INT_JOB_ID = $this->job.INT_ID");
        $this->db->join($this->method, "$this->method.INT_ID = $this->job_planning.INT_METHOD_ID");

        if ($where)
            $this->db->where($where);
        return $this->db->get();
    }

    public function add_batch($data)
    {
        return $this->db->insert_batch($this->job, $data);
    }
}
