<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{    

    public function get_user($table){
        return $this->db->get('tbl_pengguna');                    //Mengambil nilai dari database

    }


    public function insert_data($data, $table)              //Fungsi insert nya
    {
        $this->db->insert($table, $data);
    }


    public function update_data($data, $table)      //update table
    {
        $this->db->where('pengguna_id', $data['pengguna_id']);
        $this->db->update($table, $data);
    }

    public function delete($where, $table)   //delete data table
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}