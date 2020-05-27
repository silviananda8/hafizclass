<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index(){
		if($this->session->userdata('kode') == 'santri'){
			$this->load->view('templates/headerSantri');

		}elseif($this->session->userdata('kode') == 'penguji'){
			$this->load->view('templates/headerPenguji');

		}else{
			$this->load->view('templates/header');
		}
		$this->load->view('home/home');
		$this->load->view('templates/footer');

	}


	public function login(){
		$this->load->view('templates/header');
		$this->load->view('home/login');
		$this->load->view('templates/footer');

	}
	public function regisPenguji(){
		$this->load->view('templates/header');
		$this->load->view('home/regisPenguji');
		$this->load->view('templates/footer');

	}

}