<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Santri extends CI_Controller {

	public function index(){
		$this->load->view('templates/headerSantri');
		$this->load->view('santri/detailSubtarget_santri');
		$this->load->view('santri/pengumpulan');
		$this->load->view('santri/subtarget_santri');
		$this->load->view('templates/footer');
	}

	public function profilSantri(){
		$this->load->view('templates/headerSantri');
		$this->load->view('santri/dataSantri');
		$this->load->view('santri/targetSantri');
		$this->load->view('santri/kalendarAbsen');
		$this->load->view('templates/footer');

	}

	public function editDataSantri(){
		$this->load->view('templates/headerSantri');
		$this->load->view('santri/editDataSantri');
		$this->load->view('templates/footer');

	}

	public function subTarget(){
		$this->load->view('templates/headerSantri');
		$this->load->view('santri/detailSubtarget_santri');
		$this->load->view('santri/pengumpulan');
		$this->load->view('santri/subtarget_santri');
		$this->load->view('templates/footer');
	}


}