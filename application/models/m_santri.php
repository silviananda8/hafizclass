<?php
class m_santri extends CI_Model{

    function getSantri($id_santri){
        $this->db->select('*');
        $this->db->from('santri');
        $this->db->where('ID_SANTRI',$id_santri);
        $query = $this->db->get();
        return $query;
    }

    function getPenguji($id_penguji,$id_santri){
        $this->db->select('*');
        $this->db->from('santri, penguji');
        $this->db->where('santri.ID_PENGUJI = penguji.ID_PENGUJI');
        $this->db->where('penguji.ID_PENGUJI',$id_penguji);
        $this->db->where('santri.ID_SANTRI',$id_santri);
        $query = $this->db->get();
        return $query;
    }

    function updateSantri($data,$id){
        $this->db->where('ID_SANTRI', $id);
		$this->db->update('santri', $data);
    }

    function targetBaru($id_santri){
        $this->db->limit(1);
        $this->db->where('target.STATUS_TARGET','Belum Tuntas');
        return $this->listTarget($id_santri);
    }

    function listTargetByTarget($id_target,$id_santri){
        $this->db->where('target.ID_TARGET',$id_target);
        return $this->listTarget($id_santri);
    }

    function listTarget($id_santri){
        $this->db->select('target.*, penguji.NAMA_PENGUJI, DATE_FORMAT(target.BATAS_UPLOAD, "%d %M %Y") AS BTS_UPLOAD');
        $this->db->from('santri, penguji, target');
        $this->db->where('santri.ID_SANTRI = target.ID_SANTRI');
        $this->db->where('penguji.ID_PENGUJI = target.ID_PENGUJI');
        $this->db->where('santri.ID_SANTRI',$id_santri);
        $this->db->order_by('target.ID_TARGET', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    function tambahHarian($harian){
        $this->db->insert('harian', $harian);
    }

    function tambahProgress($progress){
        $this->db->insert('progress', $progress);
    }

    function cekHarian($id_target,$tanggal_harian){
        $this->db->where('ID_TARGET',$id_target);
        $this->db->where('TANGGAL_HARIAN',$tanggal_harian);
        $query = $this->db->get('harian');
        return $query;
    }

    function updateStatusHarian($id_progress,$data){
        $this->db->where('ID_PROGRESS', $id_progress);
		$this->db->update('progress', $data);
    }

    function kalenderAbsenBySantri($id_santri){
        $this->db->select('target.*, harian.`TANGGAL_HARIAN`, progress.*, penguji.NAMA_PENGUJI, DATE_FORMAT(target.BATAS_UPLOAD, "%d %M %Y") AS BTS_UPLOAD');
        $this->db->from('santri, penguji, target, harian, progress');
        $this->db->where('santri.ID_SANTRI = target.ID_SANTRI');
        $this->db->where('penguji.ID_PENGUJI = target.ID_PENGUJI');
        $this->db->where('harian.ID_TARGET = target.ID_TARGET');
        $this->db->where('progress.ID_HARIAN = harian.ID_HARIAN');
        $this->db->where('santri.ID_SANTRI',$id_santri);
        return $this->db->get()->result();
    }

    function subtargetTunggal($id_progress){
        $this->db->select('santri.*, target.*, progress.*, penguji.NAMA_PENGUJI, DATE_FORMAT(harian.TANGGAL_HARIAN, "%d %M %Y") AS TANGGAL_HARIAN,DATE_FORMAT(target.BATAS_UPLOAD, "%d %M %Y") AS BTS_UPLOAD');
        $this->relasi();
        $this->db->where('progress.ID_PROGRESS',$id_progress);
        $this->db->limit(1);
        return $this->db->get();
    }

    function getKomenByProgress($id_progress){
        $this->db->select('komentar.*');
        $this->db->from('progress,komentar');
        $this->db->where('komentar.ID_PROGRESS = progress.ID_PROGRESS');
        $this->db->where('progress.ID_PROGRESS',$id_progress);
        return $this->db->get();
    }

    function relasi(){
        $this->db->from('santri, penguji, target, harian, progress');
        $this->db->where('santri.ID_SANTRI = target.ID_SANTRI');
        $this->db->where('penguji.ID_PENGUJI = target.ID_PENGUJI');
        $this->db->where('target.ID_TARGET = harian.ID_TARGET');
        $this->db->where('progress.ID_HARIAN = harian.ID_HARIAN');
    }
}