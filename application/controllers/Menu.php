<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("HomeModel");
    }
    public function index()
    {
        $data['kategoriler'] = $this->HomeModel->getAllGeneral("grup",array(),"id","ASC"); 
        $data['gruplar'] = $this->HomeModel->getAllGeneral("grup",array('listing'=>'1'));  //kategoriler
        $data['gruplar2'] = $this->HomeModel->getAllGeneral("grup",array('listing'=>'2'));
        $data['menu'] = $this->HomeModel->getAllGeneral("menu", array('listing' =>'1'),"id","ASC");  //yiyecekler
        $data['drinks'] = $this->HomeModel->getAllGeneral("menu", array( 'listing' =>'2'),"id","ASC");
        $this->load->view('menu', $data);
    }
    public function drinks()
    {
        $data['gruplar'] = $this->HomeModel->getAllGeneral("grup",array(), "id","ASC");  
        $data['menu'] = $this->HomeModel->urun("menu");  
        $this->load->view('drinks', $data);
    }
}
