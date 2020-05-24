<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penguji extends CI_Controller {


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


}