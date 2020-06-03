<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Santri extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->database();
		$this->load->model('m_santri');
    }

	public function index(){
		$id_santri 		= $this->session->userdata('id_santri');
		$data['target']	= $this->m_santri->targetBaru($id_santri)->result();
		
		$id_target = '';
		foreach($data['target'] as $dt){
			$id_target = $dt->ID_TARGET;
		}

		if($id_target != null){
			$this->load->model('m_komen');
			$data['komen'] 		= $this->m_komen->getKomenByTarget($id_target)->result();
			$data['progress'] 	= $this->m_komen->getProgressByTarget($id_target)->result();
		}

		if($id_target == null){
			$this->session->set_flashdata('tidak ada progress','Tidak ada Progress Untuk Target Ini');
		}else{}

		$this->load->view('templates/headerSantri');
		$this->load->view('santri/detailSubtarget_santri',$data);
		$this->load->view('santri/pengumpulan');
		$this->load->view('santri/subtarget_santri');
		$this->load->view('templates/footer');
	}

	public function profilSantri(){
		$id_santri 		= $this->session->userdata('id_santri');

		//data santri
        $data['santri'] = $this->m_santri->getSantri($id_santri)->result();
		foreach($data['santri'] as $dt){
			$id_penguji = $dt->ID_PENGUJI;
		}
		$data['data'] = $this->m_santri->getPenguji($id_penguji,$id_santri)->result();

		//list target santri
		$data['list'] = $this->m_santri->listTarget($id_santri)->result();

		//kalender absen si santri
		$data_kalender	= $this->m_santri->kalenderAbsenBySantri($id_santri);

		$kalender = array();
		foreach ($data_kalender as $kd => $val){
			$kalender[] = array(
				'id' 			=> intval($val->ID_PROGRESS), 
				'title' 		=> $val->JUDUL_PROGRESS, 
				'description' 	=> trim($val->DESKRIPSI_PROGRESS), 
				'start' 		=> date_format( date_create($val->TANGGAL_HARIAN) ,"Y-m-d"),
				'end' 			=> date_format( date_create($val->TANGGAL_HARIAN) ,"Y-m-d"),
				'color'			=> "#0071c5",
				'kode_user'		=> "santri"
			);
		}
		$kldr = array();
		$kldr['get_data']	= json_encode($kalender);

		$this->load->view('templates/headerSantri');
		$this->load->view('santri/dataSantri',$data);
		$this->load->view('santri/targetSantri');
		$this->load->view('santri/kalendarAbsen',$kldr);
		$this->load->view('templates/footer');

	}

	public function editDataSantri($id_santri){
		$data['santri'] = $this->m_santri->getSantri($id_santri)->result();

		$this->load->view('templates/headerSantri');
		$this->load->view('santri/editDataSantri',$data);
		$this->load->view('templates/footer');

	}

	function prosesEditSantri(){
		$id 	= $this->input->post('id_santri');
		$nama	= $this->input->post('nama');

        $foto   = $_FILES['foto'];
        if($foto=''){}else{
            $config['upload_path']      = './assets/uploads/avatar/';
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
			'NAMA_SANTRI'	    	=> $nama,
			'JK_SANTRI'				=> $this->input->post('jenis_kelamin'),
			'TINGKAT_PENDIDIKAN'	=> $this->input->post('tingkat_pendidikan'),
			'ALAMAT_SANTRI'	    	=> $this->input->post('alamat'),
			'TELEPON_SANTRI'	    => $this->input->post('nomor_telepon'),
            'FOTO_SANTRI'           => $foto,
		);

		$this->m_santri->updateSantri($data, $id);
		
		//update tabel komen untuk memperbaharui data
		$nama_lama = $this->session->userdata('nama_santri');
		$foto_lama = $this->session->userdata('foto_santri');
		$komen = array(
			'NAMA_PENGIRIM'		=> $nama,
			'AVATAR_PENGIRIM'	=> $foto,
		);
		$this->load->model('m_komen');
		$this->m_komen->updateProfilKomen($nama_lama,$foto_lama,$komen);

        redirect('c_login/auth/'.$identify=2);
	}

	public function subTarget($id_target){
		$id_santri 		= $this->session->userdata('id_santri');
		$data['target']	= $this->m_santri->listTargetByTarget($id_target,$id_santri)->result();
		$data['santri']	= $this->m_santri->getSantri($id_santri)->result();

		$this->load->model('m_komen');
		$data['komen'] 		= $this->m_komen->getKomenByTarget($id_target)->result();
		$data['progress'] 	= $this->m_komen->getProgressByTarget($id_target)->result();

		if($data['progress'] == null){
			$pesan = $this->session->set_flashdata('tidak ada progress','Tidak ada Progress Untuk Target Ini');
		}else{}

		$this->load->view('templates/headerSantri');
		$this->load->view('santri/detailSubtarget_santri',$data);
		$this->load->view('santri/pengumpulan');
		$this->load->view('santri/subtarget_santri');
		$this->load->view('templates/footer');
	}

	function pengumpulanTugas(){
		$id_target = $this->input->post('id_target');
		$tanggal_progress  = date("Y-m-d H:i:s", strtotime("+5 hours"));
		if($id_target == null){
			$this->session->set_flashdata('msg','Tidak Ada Target Untuk Saat Ini');
			redirect('santri/index');
			die();
		}
		$date = date_create($this->input->post('tanggal_harian'));
		$tanggal_harian = date_format($date, "Y-m-d");
		$audio   = $_FILES['audio'];
        if($audio=''){}else{
            $config['upload_path']      = './assets/uploads/audio/';
            $config['allowed_types']    = '*';
            $config['max_size']         = 4096;

            $this->load->library('upload');
            $this->upload->initialize($config);

            if(!$this->upload->do_upload('audio')){
				echo $this->upload->display_errors();die();
            }else{
                $audio = $this->upload->data('file_name');
            }
		}
		
		//cek dari tabel harian
		$bb = $this->m_santri->cekHarian($id_target,$tanggal_harian)->result();
		foreach($bb as $b){
			$tgl = $b->TANGGAL_HARIAN;
			$harn = $b->ID_HARIAN;
		}


		if($tgl == $tanggal_harian){//jika tanggal harian dari id itu udah ada

			//insert into progress
			$progress = array(
				'ID_HARIAN' 		=> $harn,
				'JUDUL_PROGRESS' 	=> $this->input->post('judul_progress'),
				'DESKRIPSI_PROGRESS'=> $this->input->post('deskripsi_progress'),
				'JENIS_PROGRESS'	=> $this->input->post('jenis_progress'),
				'STATUS_PROGRESS'	=> "Belum Dinilai",
				'AUDIO'				=> $audio,
				'TANGGAL_PROGRESS'	=> $tanggal_progress
			);
			$this->session->set_flashdata('msg','Data berhasil Ditambahkan');
			$this->m_santri->tambahProgress($progress);
			redirect('santri/subTarget/'.$id_target);

		}else{
			//insert into harian
			$harian = array(
				'ID_TARGET'			=> $id_target,
				'TANGGAL_HARIAN'	=> $tanggal_harian
			);
			$this->m_santri->tambahHarian($harian);

			//ambil id harian yang terakhir ditambahkan
			$azz = $this->m_santri->cekHarian($id_target,$tanggal_harian)->result();
			foreach($azz as $id){
				$id_har = $id->ID_HARIAN;
			}

			//insert into progress
			$progress = array(
				'ID_HARIAN' 		=> $id_har,
				'JUDUL_PROGRESS' 	=> $this->input->post('judul_progress'),
				'DESKRIPSI_PROGRESS'=> $this->input->post('deskripsi_progress'),
				'JENIS_PROGRESS'	=> $this->input->post('jenis_progress'),
				'STATUS_PROGRESS'	=> "Belum Dinilai",
				'AUDIO'				=> $audio,
				'TANGGAL_PROGRESS'	=> $tanggal_progress
			);

			$this->session->set_flashdata('msg','Data berhasil Ditambahkan');
			$this->m_santri->tambahProgress($progress);
			redirect('santri/subTarget/'.$id_target);
		}
	}

	function updateStatusHarian(){
		$id_progress 	 = $this->input->post('id_progress');
		$status_progress = $this->input->post('status_progress');

		$result['pesan']	= "Status Harian Berhasil diPerbarui";

		$data=array(
			'STATUS_PROGRESS' => $status_progress
		);

		$this->m_santri->updateStatusHarian($id_progress,$data);
		echo json_encode($result);
	}

	public function subtargetTunggal($id_progress){
		$data['target'] = $this->m_santri->subtargetTunggal($id_progress)->result();
		$data['komen'] 	= $this->m_santri->getKomenByProgress($id_progress)->result();

		$this->load->view('templates/headerSantri');
		$this->load->view('santri/detailSubtarget_santri',$data);
		$this->load->view('santri/subtargetTunggal');
		$this->load->view('templates/footer');
	}
}