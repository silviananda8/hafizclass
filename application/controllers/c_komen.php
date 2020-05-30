<?php
class c_komen extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_komen');
    }

    public function kirimKomen($kode) {
        //tanggal
        $tanggal_komen  = date("d-M-Y H:i:s", strtotime("+5 hours"));
        $id_target      = $this->input->post('id_target');
        $id_progress    = $this->input->post('id_progress');

        if($kode == "penguji"){
            $avatar = $this->session->userdata('foto_penguji');
            $nama   = $this->session->userdata('nama_penguji');
        }else{
            $avatar = $this->session->userdata('foto_santri');
            $nama   = $this->session->userdata('nama_santri');
        }

        $data = array(
            'ID_PROGRESS'       => $id_progress,
            'ID_KOMEN'          => $this->input->post('id_komen'),
            'ISI_KOMEN'         => $this->input->post('isi_komen'),
            'TANGGAL_KOMEN'     => $tanggal_komen,
            'NAMA_PENGIRIM'     => $nama,
            'AVATAR_PENGIRIM'   => $avatar,
        );

        $this->m_komen->tambahKomen($data);
        if($kode == "penguji"){
            redirect('penguji/subtargetTunggal/'.$id_progress);
        }else{
            redirect('santri/subTarget/'.$id_target);
        }
	}

}