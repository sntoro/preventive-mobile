<?php

class Pic_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->pic = 'TM_PIC';
        $this->tool = 'TM_TOOL';
        $this->tool_wis = 'TT_TOOL_PIC';
    }

    public function save($data)
    {
        $this->db->insert($this->pic, $data);
		return $this->db->affected_rows();
	}
	
    public function update($data, $id) {
		
        $this->db->where($id);
        $this->db->update($this->pic, $data);
		return $this->db->affected_rows();
	}

    public function get($where = 0)
    {
        $this->db->select("*",FALSE);
        $this->db->from("$this->pic PIC");
        $this->db->join("$this->tool_wis TOOL_PIC", "TOOL_PIC.CHR_PIC_ID = PIC.CHR_NPK");
        $this->db->join("$this->tool TOOL", "TOOL_PIC.INT_TOOL_ID = TOOL.INT_ID");
        
        if ($where)
            $this->db->where($where);
        return $this->db->get();
    }

    public function check_password($npk, $pass)
    {
        $this->db->where('CHR_NPK', $npk);
        $user = $this->db->get($this->pic);

        if ($user->num_rows() > 0) {
            if (trim($pass) == trim($user->row()->CHR_PASSWORD)) {
                
                $user_session = array(
                    'NPK'           => $npk,
                    'USERNAME'      => trim($user->row()->CHR_USERNAME),
                    'NAME'          => $user->row()->CHR_NAME,
                    'VAL'           => true
                );
                $this->session->set_userdata($user_session);
                
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}
