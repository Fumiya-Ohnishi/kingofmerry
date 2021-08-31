<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    /**
     * DB Membership にデータを登録
    */
    
    public function insert_info($data)
    {
        if ($data['gender'] == '男性') {
            $data['gender'] = 1;
        } else {
            $data['gender'] = 2;
        }
        return $this->db->insert('Membership', $data);
    }
    
}
