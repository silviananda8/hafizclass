<?php
class m_penguji extends CI_Model{

    function regisSantri($data){
        $this->db->insert('santri', $data);
    }
    
    function regisPenguji($data){
        $this->db->insert('penguji', $data);
    }
 
    function getPenguji($id_penguji){
        $this->db->select('*');
        $this->db->from('penguji');
        $this->db->where('ID_PENGUJI',$id_penguji);
        $query = $this->db->get();
        return $query;
    }

    function updatePenguji($data,$id){
        $this->db->where('ID_PENGUJI', $id);
		$this->db->update('penguji', $data);
    }

    // daftar user
    function semuaSantri(){
        $this->db->select('santri.*,penguji.NAMA_PENGUJI');
        $this->db->from('santri, penguji');
        $this->db->where('santri.ID_PENGUJI = penguji.ID_PENGUJI');
        $query = $this->db->get();
        return $query;
    }

    function semuaPenguji(){
        return $this->db->get('penguji');
    }

    function listSantriByPenguji($id_penguji){
        $this->db->select('santri.*, penguji.NAMA_PENGUJI');
        $this->db->from('santri, penguji');
        $this->db->where('santri.ID_PENGUJI = penguji.ID_PENGUJI');
        $this->db->where('penguji.ID_PENGUJI',$id_penguji);
        return $this->db->get();
    }

    function profilSantri($id_santri){
        $this->db->select('santri.*,penguji.NAMA_PENGUJI');
        $this->db->from('santri, penguji');
        $this->db->where('santri.ID_PENGUJI = penguji.ID_PENGUJI');
        $this->db->where('santri.ID_SANTRI',$id_santri);
        $query = $this->db->get();
        return $query;
    }

    function listPengujiBySantri($id_santri){
        $query = $this->db->query("SELECT penguji.NAMA_PENGUJI, penguji.ID_PENGUJI from penguji WHERE penguji.ID_PENGUJI NOT IN (SELECT ID_PENGUJI FROM santri WHERE ID_SANTRI='$id_santri')");
        return $query;
    }

    function listPenguji(){
        $this->db->select('NAMA_PENGUJI,ID_PENGUJI');
        $query = $this->db->get('penguji');
        return $query;
    }

    function listTargetBySantri($id_santri){
        $this->db->select('target.*, penguji.NAMA_PENGUJI, penguji.ID_PENGUJI, DATE_FORMAT(target.BATAS_UPLOAD, "%d %M %Y") AS BTS_UPLOAD');
        $this->db->from('santri, penguji, target');
        $this->db->where('santri.ID_SANTRI = target.ID_SANTRI');
        $this->db->where('penguji.ID_PENGUJI = target.ID_PENGUJI');
        $this->db->where('santri.ID_SANTRI',$id_santri);
        $this->db->order_by('target.ID_TARGET', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    // tambah target untuk santri
    function tambahProgress($progress){
        $this->db->insert('progress', $progress);
    }

    function selectLastIdProgress(){
        $query = $this->db->query("SELECT ID_PROGRESS FROM progress ORDER BY ID_PROGRESS DESC LIMIT 1");
        return $query;
    }

    function tambahTarget($target){
        $this->db->insert('target', $target);
    }
    
    function pengumpulanSaya($id_penguji){
        $this->db->where('santri.ID_PENGUJI = penguji.ID_PENGUJI');
        $this->db->where('penguji.ID_PENGUJI',$id_penguji);
        return $this->pengumpulanSemua();
    }

    function pengumpulanSemua(){
        $this->db->select('santri.*, progress.*, penguji.NAMA_PENGUJI');
        $this->relasi();
        return $this->db->get();
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

    function subTargetByTarget($id_target){
        $this->db->select('target.*, penguji.NAMA_PENGUJI, DATE_FORMAT(harian.TANGGAL_HARIAN, "%d %M %Y") AS TANGGAL_HARIAN,DATE_FORMAT(target.BATAS_UPLOAD, "%d %M %Y") AS BTS_UPLOAD');
        $this->relasi();
        $this->db->where('target.ID_TARGET',$id_target);
        $this->db->limit(1);
        return $this->db->get();
    }

    function relasi(){
        $this->db->from('santri, penguji, target, harian, progress');
        $this->db->where('santri.ID_SANTRI = target.ID_SANTRI');
        $this->db->where('penguji.ID_PENGUJI = target.ID_PENGUJI');
        $this->db->where('target.ID_TARGET = harian.ID_TARGET');
        $this->db->where('progress.ID_HARIAN = harian.ID_HARIAN');
    }

    function updateStatusTarget($id_target,$data){
        $this->db->where('ID_TARGET', $id_target);
		$this->db->update('target', $data);
    }

    function updatePengujiSantri($id_santri,$data){
        $this->db->where('ID_SANTRI', $id_santri);
		$this->db->update('santri', $data);
    }
}