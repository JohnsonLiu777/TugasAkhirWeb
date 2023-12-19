<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	
	public function index()
	{
        $this->load->view('welcome_mahasiswa');
	}

	public function nilai()
	{
		$data['title'] = "Nilai Mahasiswa";   //Memuat data
		$data['mahasiswa'] = "Jessica";
		$data ['nilai'] = "A";
        $this->load->view('tampil_nilai',$data); // Memberikan data ke view tampil_nilai
	}

 
}
