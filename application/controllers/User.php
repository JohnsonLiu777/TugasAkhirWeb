<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


    //Fungsi yang dijalankan pertama kali saat menjalankan controler
    public function __construct(){
        parent::__construct();
        $this->load->model('M_user');

    }




    public function index()
    {
        // // Mengambil data dari model lalu meletakkannya dalam array
        // $this->load->model('M_barang');
        // $data['data_barang'] = $this->M_barang->t_barang();

        // Mengambil data dari model lalu meletakkannya dalam array
        $data['data_user'] = $this->M_user->get_user('tbl_pengguna')-> result() ;


        // var_dump($data);  //mengeceh apakah data berhasil
        // die;

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/User/tampil_user', $data);
        $this->load->view('admin/footer');
    }


    //Untuk tambah mengarah ke page (view = tambah)
    public function tambah()
    {
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');

        $this->load->view('admin/User/tambah_user');
    }


    public function tambah_aksi(){

        $this->_rules();                         //Implementasi function rule

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'pengguna_nama' => $this->input->post('pengguna_nama'),
                'pengguna_username' => $this->input->post('pengguna_username'),
                'pengguna_password' => $this->input->post('pengguna_password'),
                'pengguna_email' => $this->input->post('pengguna_email'),
            );
        
            $this->M_user->insert_data($data, 'tbl_pengguna');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data berhasil ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('User');
        }
        

    }



// Edit 
public function edit($pengguna_id){
    $this->_rules();                         //Implementasi function rule

    if ($this->form_validation->run() == FALSE) {
        $this->index();
    } else {
        $data = array(
            'pengguna_id' => $pengguna_id,
            'pengguna_nama' => $this->input->post('pengguna_nama'),
            'pengguna_username' => $this->input->post('pengguna_username'),
            'pengguna_password' => $this->input->post('pengguna_password'),
            'pengguna_email' => $this->input->post('pengguna_email'),
        );
    
        $this->M_user->update_data($data,'tbl_pengguna');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil diubah.
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
     </div>');
        redirect('User');
    }
}
















    //Rules harus mengisi tiap form yang ada 
    public function _rules()
    {
        $this->form_validation->set_rules('pengguna_nama', 'Nama User', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('pengguna_username', 'UserName', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('pengguna_password', 'Password', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('pengguna_email', 'Email', 'required', array(
            'required' => '%s harus diisi !!'
        ));
    }

    //Untuk fungsi delete
    public function delete($id)
    {
        $where = array('pengguna_id' => $id);
        $this->M_user->delete($where,'tbl_pengguna');                                                                                //Mengamil dari model
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data berhasil dihapus.
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
     </div>');
        redirect('User');
        
        
    }





    
}
