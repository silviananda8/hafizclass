<?php
class c_komen extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_komen');
    }

    public function kirimKomen() {
        //tanggal
        $tanggal_komen = date("d-M-Y H:i:s", strtotime("+5 hours"));
        $id_target = $this->input->post('id_target');

        $data = array(
            'ID_PROGRESS'       => $this->input->post('id_progress'),
            'ID_KOMEN'          => $this->input->post('id_komen'),
            'ISI_KOMEN'          => $this->input->post('isi_komen'),
            'TANGGAL_KOMEN'     => $tanggal_komen,
            'NAMA_PENGIRIM'     => $this->session->userdata('nama_santri'),
            'AVATAR_PENGIRIM'   => $this->session->userdata('foto_santri'),
        );

        $this->m_komen->tambahKomen($data);
		redirect('santri/subTarget/'.$id_target);
	}

}