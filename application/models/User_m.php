<?php

class User_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table_user = 'DB_AIS.dbo.TM_USER';
    }

    public function check_password($npk, $pass)
    {
        $this->db->where('CHR_NPK', $npk);
        $user = $this->db->get($this->table_user);

        if ($user->num_rows() > 0) {
            if (trim(md5(trim($pass) . trim($user->row()->CHR_REGIS_DATE))) == trim($user->row()->CHR_PASS)) {
                
                $user_session = array(
                    'NPK'           => $npk,
                    'USERNAME'      => trim($user->row()->CHR_USERNAME),
                    'DEPT'          => $user->row()->INT_ID_DEPT,
                    'SECTION'       => $user->row()->INT_ID_SECTION,
                    'SUBSECTION'    => $user->row()->INT_ID_SUB_SECTION,
                    'ROLE'          => $user->row()->INT_ID_ROLE,
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
