<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	
	public function index()
	{
        $this->load->view('login');
	}

   public function cek_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('pengguna_password', TRUE);
		$hashPass = password_hash($password, PASSWORD_DEFAULT);
		$test = password_verify($password, $hashPass);

		// query cek user
		$this->db->where('pengguna_email', $email);
		$users = $this->db->get('tbl_pengguna');

			// echo "<pre>";
			// print_r($users);
			// print_r($hashPass);
			// echo "</pre>";
			// die;

        //email   = jacob@gmail.com
        //Pasword = jacob123

        //email   = anakmuda@gmail.com
        //Pasword = anakmuda123
		if ($users->num_rows() > 0){
			$user = $users->row_array();
            if (password_verify($password, $user['pengguna_password'])) {
                // Menambahkan kondisi untuk email dan password tertentu
                if ($email === 'anakmuda@gmail.com' && $password === 'anakmuda123') {
                    // Jika email dan password sesuai, set session dan arahkan ke dashboard
                    $this->session->set_userdata('user', $user);
                    redirect('Dashboard');
    
                }
            }

            
			if(password_verify($password, $user['pengguna_password'])){
				$this->session->userdata('user');
				redirect('home');
			} else {
                $this->session->set_flashdata('status_login', 'password yang Anda masukkan salah');
				redirect('Auth','refresh');
			}
		} else {
			$this->session->set_flashdata('status_login', 'Email atau password yang Anda masukkan salah');
			redirect('Auth','refresh');
		}

       

        


	}

	public function logout(){
		$this->session->sess_destroy();
		$this->session->set_flashdata('status_login', 'Anda sudah berhasil keluar dari aplikasi');
		redirect('Auth','refresh');
	}



 
}
