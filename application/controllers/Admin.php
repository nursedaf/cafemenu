<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("HomeModel");
    }

    public function index()
	{
		if ($this->session->userdata("user")) {
			$this->load->view('admin/urunekle');
		} else $this->load->view('admin/login');
	}
	public function login()
	{
		echo $ad = $this->input->post("ad");
		echo $password = $this->input->post("password");
		if (!empty($name) || !empty($password)) {
			$user = $this->HomeModel->getAllGeneral(
				"users",
				array(
					"ad" => $ad,
					"password" => $password,
				)
			);
			if ($user) {
				$this->session->set_userdata("user", $user);
				redirect(base_url('admin'));
			} else {
				$this->session->set_flashdata('msg', 'kullanıcı adı veya parola yanlış');
				redirect(base_url('admin'));
			}
		}
	}
    
    public function logout()
    {
        $this->session->unset_userdata("user");
        redirect(base_url("admin"));
    }

    public function urunekle() //menüye ürün ekle
    {
        date_default_timezone_set('Europe/Istanbul');

        $ad = $this->input->post('ad');
        $info = $this->input->post('info');
        $fiyat = $this->input->post('fiyat');
        $grup_id = $this->input->post('grup_id');
        $zaman = date("Y-m-d");
        $foto = null;
        $listing = "1";

        if(isset($_POST['foto'])){
            $tip = $_FILES['foto']['type'];
            $resimAdi = $_FILES['foto']['name'];
            $uzantisi = explode('.', $resimAdi);
            $uzantisi = $uzantisi[count($uzantisi) - 1];
            $yeni_adi = "uploads/" . time() . "." . $uzantisi;
            if ($tip == 'image/jpeg' || $tip == 'image/png') {
                if (move_uploaded_file($_FILES["foto"]["tmp_name"], $yeni_adi)) {
                    $foto =  $yeni_adi;
                }
            }
        }

        if($grup_id == "6" OR $grup_id == "7" OR $grup_id == "8" OR $grup_id == "9"){
            $listing = "2";
        }

        $ekle = $this->HomeModel->insert(
            array(
                'ad' => $ad,
                'info' => $info,
                'foto' => $foto,
                'listing' => $listing,
                'fiyat' => $fiyat,
                'grup_id' => $grup_id,
                'zaman' => $zaman
            ),
            "menu"
        ); 
        
        
        if ($ekle) {
            $this->session->set_flashdata('msg', 'Eklendi');
            redirect('admin');
        } else {
            $this->session->set_flashdata('msg', 'Eklenemedi!!!');
            redirect('admin');
        }
    }

    public function urun()
    {
        $this->load->view('admin/urun');
    }

    

	
}
