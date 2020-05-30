<?php
class c_login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
  }
 

 function auth($identify){
    if($identify == 1){
        $email          = $this->input->post('email',TRUE);
        $password       = $this->input->post('password',TRUE);
    }else{
        $email          = $this->session->userdata('email');
        $password       = $this->session->userdata('password');
    }

    $cek_santri     = $this->m_login->auth_santri($email,$password);
    $cek_penguji     = $this->m_login->auth_penguji($email,$password);   
            
	if($cek_santri->num_rows() > 0){
        $data               = $cek_santri->row_array();
        $id_santri          = $data['ID_SANTRI'];
        $email_santri       = $data['EMAIL_SANTRI'];
        $password_santri    = $data['PASSWORD_SANTRI'];
        $nama_santri        = $data['NAMA_SANTRI'];
        $foto_santri        = $data['FOTO_SANTRI'];
        $kode               = 'santri';

        $sesdata = array(
            'id_santri'          => $id_santri,
            'email'              => $email_santri ,
            'password'           => $password_santri,
            'nama_santri'        => $nama_santri,
            'foto_santri'        => $foto_santri,
            'kode'               => $kode,
            'logged_in'          => TRUE
        );

        $this->session->set_flashdata('msg','Login Telah Berhasil Dilakukan');
        $this->session->set_userdata($sesdata);
        
        if($identify == 1){
            redirect('santri/index');
        }else{
            redirect('santri/profilSantri');
        }

	}elseif($cek_penguji->num_rows() > 0){
        $data  = $cek_penguji->row_array();
        $id_penguji          = $data['ID_PENGUJI'];
        $email_penguji       = $data['EMAIL_PENGUJI'];
        $password_penguji    = $data['PASSWORD_PENGUJI'];
        $nama_penguji        = $data['NAMA_PENGUJI'];
        $foto_penguji        = $data['FOTO_PENGUJI'];
        $kode               = 'penguji';

        $sesdata = array(
            'id_penguji'          => $id_penguji,
            'email'               => $email_penguji ,
            'password'            => $password_penguji,
            'nama_penguji'        => $nama_penguji,
            'foto_penguji'        => $foto_penguji,
            'kode'                => $kode,
            'logged_in' => TRUE
        );
        
        $this->session->set_flashdata('msg','Login Telah Berhasil Dilakukan');
        $this->session->set_userdata($sesdata);
        $kode = 1;

        if($identify == 1){
            redirect('penguji/index/'.$kode);
        }else{
            redirect('penguji/profilPenguji');
        }    

  }else{
        $this->session->set_flashdata('msg','Username Atau Password Salah');
        redirect('home/index');
    }
	}

      function logout(){
      $this->session->sess_destroy();
      redirect('home/index');
  }

 }

?>