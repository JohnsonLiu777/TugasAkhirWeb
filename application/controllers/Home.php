<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() // Perbaikan: dua garis bawah di sini
    {
        parent::__construct(); // Perbaikan: dua garis bawah di sini
        $this->load->model('M_pages');
    }

    public function index()
    {
        $data = array(
            'title' => 'Halaman Home',
        );

        $data['data_judul'] = $this->M_pages->get_data_judul()->row_array();
        $data['data_deskripsi'] = $this->M_pages->get_data_deskripsi()->row_array();

        //Mengambil data pengguna
        $data['data_pengunjung'] = $this->M_pages->get_pengunjung('tbl_pengunjung')-> result() ;


        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // die;

        $this->template->load('Depan/template', 'Depan/v_isi', $data);
    }



    //Tambah
    public function tambah_aksi(){

        $this->_rules();                         //Implementasi function rule

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'pengunjung_nama' => $this->input->post('pengunjung_nama'),
                'pengunjung_email' => $this->input->post('pengunjung_email'),
                'pengunjung_subject' => $this->input->post('pengunjung_subject'),
                'pengunjung_message' => $this->input->post('pengunjung_message'),
            );
        
            $this->M_pages->insert_data($data, 'tbl_pengunjung');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data berhasil ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('Home');
        }
        

    }
    

// Edit 
public function edit($pengunjung_id){
    $this->_rules();                         //Implementasi function rule

    if ($this->form_validation->run() == FALSE) {
        $this->index();
    } else {
        $data = array(
            'pengunjung_id' => $pengunjung_id,
            'pengunjung_nama' => $this->input->post('pengunjung_nama'),
            'pengunjung_email' => $this->input->post('pengunjung_email'),
            'pengunjung_subject' => $this->input->post('pengunjung_subject'),
            'pengunjung_message' => $this->input->post('pengunjung_message'),
        );
    
        $this->M_pages->update_data($data,'tbl_pengunjung');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil diubah.
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
     </div>');
        redirect('Home');
    }
}



  //Rules harus mengisi tiap form yang ada 
  public function _rules()
  {
      $this->form_validation->set_rules('pengunjung_nama', 'Name', 'required', array(
          'required' => '%s harus diisi !!'
      ));
      $this->form_validation->set_rules('pengunjung_email', 'Email', 'required', array(
          'required' => '%s harus diisi !!'
      ));
      $this->form_validation->set_rules('pengunjung_subject', 'Subject', 'required', array(
          'required' => '%s harus diisi !!'
      ));
      $this->form_validation->set_rules('pengunjung_message', 'Message', 'required', array(
          'required' => '%s harus diisi !!'
      ));
  }


    //Untuk fungsi delete
    public function delete($id)
    {
        $where = array('pengunjung_id' => $id);
        $this->M_pages->delete($where,'tbl_pengunjung');                                                                                //Mengamil dari model
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data berhasil dihapus.
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
     </div>');
        redirect('Home');
        
        
    }

}
