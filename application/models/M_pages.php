<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pages extends CI_Model{   
    
    //Melakukan seleksi danga pengambilan data pada database
    public function get_data_judul($cat_id=1){
        $this->db->where('tbl_tulisan.tulisan_id',$cat_id);
        $data = $this->db->get('tbl_tulisan');  
        return $data;
    }
    
    public function get_data_deskripsi($cat_id=2){
        $this->db->where('tbl_tulisan.tulisan_id',$cat_id);
        $data = $this->db->get('tbl_tulisan');  
        return $data;
    }

    //Mengamibl data pengunjung dari data base
    public function get_pengunjung($table){
        return $this->db->get('tbl_pengunjung');
    }

    public function insert_data($data, $table)              //Fungsi insert nya
    {
        $this->db->insert($table, $data);
    }


    public function update_data($data, $table)      //update table
    {
        $this->db->where('pengunjung_id', $data['pengunjung_id']);
        $this->db->update($table, $data);
    }

    public function delete($where, $table)   //delete data table
    {
        $this->db->where($where);
        $this->db->delete($table);
    }



  

}