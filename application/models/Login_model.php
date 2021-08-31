<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    /**
     * DB Membership と $data の内容が一致か確認
     * ID password が一致の場合 falseを返す
    */

    public function check($data)
    {
        $query = $this->db->get_where('Membership', array('mail' => $data['id']));
        $result = $query->row_array();
        if ($query->num_rows() !== 1) {
            return false;
        }
        if (password_verify($data['password'], $result['password'])) {
            return true;
        }
        return false;
    }

    /**
     * DB Membership の内容を全て配列で取得
    */

    public function fetch_all()
    {
        return $this->db->get('Membership')
            ->result_array();
    }
}
