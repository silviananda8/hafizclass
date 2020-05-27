<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penguji extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_penguji');
    }

	public function index(){
		$this->load->view('templates/headerPenguji');
		$this->load->view('penguji/index');
		$this->load->view('templates/footer');

	}

	public function subtarget(){
		$this->load->view('templates/headerPenguji');
		$this->load->view('santri/detailSubtarget_penguji');
		$this->load->view('santri/subtarget_penguji');
		$this->load->view('templates/footer');
	}
	public function subtargetTunggal(){
		$this->load->view('templates/headerPenguji');
		$this->load->view('santri/detailSubtarget_penguji');
		$this->load->view('santri/subtargetTunggal');
		$this->load->view('templates/footer');
	}

	public function profilPenguji(){
		$this->load->view('templates/headerPenguji');
		$this->load->view('penguji/dataPenguji');
		$this->load->view('penguji/daftarSantri');
		$this->load->view('templates/footer');

	}
		public function profilPenguji_view(){
		$this->load->view('templates/headerPenguji');
		$this->load->view('penguji/dataPenguji_view');
		$this->load->view('penguji/daftarSantri');
		$this->load->view('templates/footer');

	}
	public function editDataPenguji(){
		$this->load->view('templates/headerPenguji');
		$this->load->view('penguji/editDataPenguji');
		$this->load->view('templates/footer');

	}
		public function profilSantri(){
		$this->load->view('templates/headerPenguji');
		$this->load->view('santri/dataSantri_penguji');
		$this->load->view('santri/targetSantri_penguji');
		$this->load->view('santri/kalendarAbsen');
		$this->load->view('templates/footer');

	}
		public function semuaSantri(){
		$this->load->view('templates/headerPenguji');
		$this->load->view('penguji/semuaSantri');
		$this->load->view('templates/footer');

	}
	
	public function tambahSantri(){
		$this->load->view('templates/headerPenguji');
		$this->load->view('penguji/tambahSantri');
		$this->load->view('templates/footer');

	}

	public function semuaPenguji(){
		$this->load->view('templates/headerPenguji');
		$this->load->view('penguji/semuaPenguji');
		$this->load->view('templates/footer');

	}	

	function regisSantri(){
		$id_penguji = $this->session->userdata('id_penguji');

		$data = array(
			'ID_PENGUJI'			=> $id_penguji,
			'EMAIL_SANTRI'	    	=> $this->input->post('email'),
			'PASSWORD_SANTRI'	    => $this->input->post('password'),
			'NAMA_SANTRI'			=> $this->input->post('nama'),
			'JK_SANTRI'				=> $this->input->post('jenis_kelamin'),
			'TINGKAT_PENDIDIKAN'	=> $this->input->post('tingkat_pendidikan')
		);

		$this->m_penguji->regisSantri($data);

		$this->session->set_flashdata('msg','Registrasi Santri Telah berhasil Dilakukan');
        redirect('penguji/tambahSantri');
	}

	function regisPenguji(){
		$data = array(
			'EMAIL_PENGUJI'	    	=> $this->input->post('email'),
			'PASSWORD_PENGUJI'	    => $this->input->post('password'),
			'NAMA_PENGUJI'			=> $this->input->post('nama')
		);

		$this->m_penguji->regisPenguji($data);

		$this->session->set_flashdata('msg','Registrasi Penguji Telah berhasil Dilakukan');
        redirect('home/regisPenguji');
	}
}