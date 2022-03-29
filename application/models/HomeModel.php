<?php
class HomeModel extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function urun($table)  //menu
    {
        return $this->db->get($table)->result();
    }

    public function getGeneral($table, $where = array()) //tek kontrol
    {
        $this->db->where($where);
        return $this->db->get($table)->row();
    }

    public function getAllGeneral($table, $where = array(), $column = "", $order = "")
    {
        if ($column != "" and $order != "") $this->db->order_by($column, $order);
        else $this->db->where($where);
        return $this->db->get($table)->result();
    }
    
    public function insert($data = array(), $table) //yeni ürün ekleme
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function update($where = array(), $data = array(), $table) //adet
    {
        return $this->db->where($where)->update($table, $data);
    }
    
 
}
