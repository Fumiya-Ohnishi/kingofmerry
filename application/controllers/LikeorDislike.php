<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LikeOrDislike extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Product_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
        date_default_timezone_set('Asia/Tokyo');
    }

    /**
     * TOPページ表示
     * 
     * @access	public
     * @param $product_all DB PRODUCTのデータを全て取得
     * @param $rand_index $product_allの配列からランダムに表示
     * 
     */

    public function index()
    {
        $data = null;

        $product_all = $this->Product_model->fetch_all();

        $rand_index = array_rand($product_all);
        $data["product"] = $product_all[$rand_index];
        $this->load->view('LOD_header_view');
        $this->load->view('LOD1_view', $data);
    }

    /**
     * 
     * Good Bad のクリック回数カウント
     * 規定回数クリックしたらログイン画面へ
     * 
     * @access	public
     * @param $_SESSION["product_limit"] クリック回数のカウント
     * @param $data DB Product から情報を１行ずつ獲得
     * 
     */

    public function product($id)
    {
        if (!isset($_SESSION["product_limit"])) {
            $_SESSION["product_limit"] = 0;
        } else if ($_SESSION["product_limit"] === 3) {
            redirect("LikeorDislike/register");
        } else {
            $_SESSION["product_limit"]++;
        }

        $data = null;
        $data["product"] = $this->Product_model->fetch_product($id);
        $this->load->view('LOD_header_view');
        $this->load->view('LOD1_view', $data);
    }

    /**
     *
     * DB[LOD]に個別にクリック回数を登録していく
     * 登録完了後 productへredirectされる
     * 
     * @access public
     *
     */

    public function click()
    {
        $name = $this->input->post("name");
        $like = $this->input->post("like");
        $dislike = $this->input->post("dislike");

        $this->Product_model->insert_row(["name" => $name, "good" => $like, "bad" => $dislike]);

        $product_all = $this->Product_model->fetch_all();
        $rand_index = array_rand($product_all);
        echo $product_all[$rand_index]["ID"];
    }

    /**
     * クリック回数が規定回数に達した場合実装される
     * 
     * @access public
    */

    public function register()
    {
        unset($_SESSION["product_limit"]);
        $this->load->view('LOD_direction_header_view');
        $this->load->view('LOD_direction_view');
    }
}
