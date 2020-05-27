<?php
class c_login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
  }
 

 function auth(){
    $email          = $this->input->post('email',TRUE);
    $password       = $this->input->post('password',TRUE);

    $cek_santri     = $this->m_login->auth_santri($email,$password);
    $cek_ustadz     = $this->m_login->auth_ustadz($email,$password);   
            
	if($cek_santri->num_rows() > 0){
        $data               = $cek_santri->row_array();
        $id_santri          = $data['ID_SANTRI'];
        $email_santri       = $data['EMAIL_SANTRI'];
        $password_santri    = $data['PASSWORD_SANTRI'];
        $foto_santri        = $data['FOTO_SANTRI'];

        $sesdata = array(
            'id_santri'          => $id_santri,
            'email_santri '      => $email_santri ,
            'password_santri'    => $password_santri,
            'foto_santri'        => $foto_santri,
            'logged_in' => TRUE
        );

        $this->session->set_flashdata('msg','Login Telah Berhasil Dilakukan');
		$this->session->set_userdata($sesdata);
        redirect('santri/index');

	}elseif($cek_ustadz->num_rows() > 0){
        $data  = $cek_ustadz->row_array();
        $id_ustadz          = $data['ID_USTADZ'];
        $email_ustadz       = $data['EMAIL_USTADZ'];
        $password_ustadz    = $data['PASSWORD_USTADZ'];
        $foto_ustadz        = $data['FOTO_USTADZ'];

        $sesdata = array(
            'id_ustadz'          => $id_ustadz,
            'email_ustadz '      => $email_ustadz ,
            'password_ustadz'    => $password_ustadz,
            'foto_ustadz'        => $foto_santri,
            'logged_in' => TRUE
        );
        
        $this->session->set_flashdata('msg','Login Telah Berhasil Dilakukan');
        $this->session->set_userdata($sesdata);
            redirect('penguji/index');     

  }else{
        echo $this->session->set_flashdata('msg','Username Atau Password Salah');
        redirect('home/index');
    }
	}

      function logout(){
      $this->session->sess_destroy();
      redirect('home/index');
  }

 }

?>