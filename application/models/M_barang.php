<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model{    

    public function t_barang(){
        return $this->db->get('tbl_barang');                    //Mengambil nilai dari database

    }

}