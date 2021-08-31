<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    /**
     * DB Product から ID のデータをとってくる
    */

    public function fetch_product($id)
    {
        return $this->db->where('id', $id)
            ->get('Product')
            ->row_array();
    }

    /**
     * DB LOD にデータを登録
    */

    public function insert_row($data)
    {
        $this->db->insert('LOD', $data);
    }

    /**
     * DB Product から全てのデータを配列で取得
    */

    public function fetch_all()
    {
        return $this->db->get('Product')
            ->result_array();
    }

    /**
     * DB LOD のデータを名前をキーにグループ化し合計
     * 結果を配列で取得
    */

    public function get_num()
    {
        $this->db->select_sum('good', 'total_good');
        $this->db->select_sum('bad', 'total_bad');
        $this->db->select('name');
        $this->db->group_by("name");
        return $this->db->get('LOD')
            ->result_array();
    }
}
