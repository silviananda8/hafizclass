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

	public function subtarget($id_target){
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
		$id_penguji 		= $this->session->userdata('id_penguji');
		$data['penguji'] = $this->m_penguji->getPenguji($id_penguji)->result();
		
		$this->load->view('templates/headerPenguji');
		$this->load->view('penguji/dataPenguji',$data);
		$this->load->view('penguji/daftarSantri');
		$this->load->view('templates/footer');

	}
		public function profilPenguji_view(){
		$this->load->view('templates/headerPenguji');
		$this->load->view('penguji/dataPenguji_view');
		$this->load->view('penguji/daftarSantri');
		$this->load->view('templates/footer');

	}
	public function editDataPenguji($id_penguji){
		$data['penguji'] = $this->m_penguji->getPenguji($id_penguji)->result();

		$this->load->view('templates/headerPenguji');
		$this->load->view('penguji/editDataPenguji',$data);
		$this->load->view('templates/footer');

	}

	function prosesEditPenguji(){
		$id = $this->input->post('id_penguji');

        $foto   = $_FILES['foto'];
        if($foto=''){}else{
            $config['upload_path']      = './assets/uploads/penguji/avatar/';
            $config['allowed_types']    = 'jpg|jpeg|gif|png';
            $config['max_size']         = 4096;

            $this->load->library('upload');
            $this->upload->initialize($config);

            if(!$this->upload->do_upload('foto')){
				$foto = $this->input->post('foto_cadangan');
            }else{
                $foto = $this->upload->data('file_name');
            }
        }

		$data = array(
			'NAMA_PENGUJI'	    	=> $this->input->post('nama'),
			'JK_PENGUJI'			=> $this->input->post('jenis_kelamin'),
			'TINGKAT_MENGUJI'		=> $this->input->post('tingkat_menguji'),
			'ALAMAT_PENGUJI'	    => $this->input->post('alamat'),
			'TELEPON_PENGUJI'	    => $this->input->post('nomor_telepon'),
            'FOTO_PENGUJI'          => $foto,
		);

        $this->m_penguji->updatePenguji($data, $id);
        redirect('penguji/index');
	}
	
		public function profilSantri($id_santri){
		$data['data'] = $this->m_penguji->profilSantri($id_santri)->result();
		$data['list'] = $this->m_penguji->listPengujiBySantri($id_santri)->result();
		$data['target'] = $this->m_penguji->listTargetBySantri($id_santri)->result();
		$data['penguji'] = $this->m_penguji->listPenguji()->result();

		$this->load->view('templates/headerPenguji');
		$this->load->view('santri/dataSantri_penguji',$data);
		$this->load->view('santri/targetSantri_penguji');
		$this->load->view('santri/kalendarAbsen');
		$this->load->view('templates/footer');

	}
		public function semuaSantri(){
		$data['data'] = $this->m_penguji->semuaSantri()->result();
		
		$this->load->view('templates/headerPenguji');
		$this->load->view('penguji/semuaSantri',$data);
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
			'NAMA_PENGUJI'			=> "Ust. ".$this->input->post('nama')
		);

		$this->m_penguji->regisPenguji($data);

		$this->session->set_flashdata('msg','Registrasi Penguji Telah berhasil Dilakukan');
        redirect('home/regisPenguji');
	}

	function tambahTargetSantri(){
		$id_santri = $this->input->post('id_santri');
		$id_penguji = $this->input->post('id_penguji');
		$status_target = "Belum Tuntas";

		$target = array(
			'JUDUL_TARGET'	    => $this->input->post('judul_target'),
			'DESKRIPSI_TARGET'	=> $this->input->post('deskripsi_target'),
			'STATUS_TARGET'	    => $status_target,
			'BATAS_UPLOAD'	    => $this->input->post('batas_waktu'),
			'TANGGAL_UPLOAD'	=> $this->input->post('tanggal_upload'),
			'ID_SANTRI'			=> $id_santri,
			'ID_PENGUJI'		=> $id_penguji
		);

		$this->m_penguji->tambahTarget($target);

		$this->session->set_flashdata('msg','Target Telah Ditambahkan');
        redirect('penguji/profilSantri/'.$id_santri);
	}
}