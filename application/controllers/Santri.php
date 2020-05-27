<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Santri extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_santri');
    }

	public function index(){
		$this->load->view('templates/headerSantri');
		$this->load->view('santri/detailSubtarget_santri');
		$this->load->view('santri/pengumpulan');
		$this->load->view('santri/subtarget_santri');
		$this->load->view('templates/footer');
	}

	public function profilSantri(){
		$id_santri 		= $this->session->userdata('id_santri');
        $data['santri'] = $this->m_santri->getSantri($id_santri)->result();
		
		foreach($data['santri'] as $dt){
			$id_penguji = $dt->ID_PENGUJI;
		}
		
		$data['data'] = $this->m_santri->getPenguji($id_penguji,$id_santri)->result();

		$this->load->view('templates/headerSantri');
		$this->load->view('santri/dataSantri',$data);
		$this->load->view('santri/targetSantri');
		$this->load->view('santri/kalendarAbsen');
		$this->load->view('templates/footer');

	}

	public function editDataSantri($id_santri){
		$data['santri'] = $this->m_santri->getSantri($id_santri)->result();

		$this->load->view('templates/headerSantri');
		$this->load->view('santri/editDataSantri',$data);
		$this->load->view('templates/footer');

	}

	function prosesEditSantri(){
		$id = $this->input->post('id_santri');

        $foto   = $_FILES['foto'];
        if($foto=''){}else{
            $config['upload_path']      = './assets/uploads/santri/avatar/';
            $config['allowed_types']    = 'jpg|jpeg|gif|png';
            $config['max_size']             = 4096;

            $this->load->library('upload');
            $this->upload->initialize($config);

            if(!$this->upload->do_upload('foto')){
				$foto = $this->input->post('foto_cadangan');
            }else{
                $foto = $this->upload->data('file_name');
            }
        }

		$data = array(
			'NAMA_SANTRI'	    	=> $this->input->post('nama'),
			'JK_SANTRI'				=> $this->input->post('jenis_kelamin'),
			'TINGKAT_PENDIDIKAN'	=> $this->input->post('tingkat_pendidikan'),
			'ALAMAT_SANTRI'	    	=> $this->input->post('alamat'),
			'TELEPON_SANTRI'	    => $this->input->post('nomor_telepon'),
            'FOTO_SANTRI'           => $foto,
		);

        $this->m_santri->updateSantri($data, $id);
        redirect('santri/index');
	}

	public function subTarget(){
		$this->load->view('templates/headerSantri');
		$this->load->view('santri/detailSubtarget_santri');
		$this->load->view('santri/pengumpulan');
		$this->load->view('santri/subtarget_santri');
		$this->load->view('templates/footer');
	}

}