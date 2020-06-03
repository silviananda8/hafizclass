<?php
class m_komen extends CI_Model{
 
    //get data komentar
    function getKomenByTarget($id_target){
        $this->db->select('komentar.*');
        $this->db->from('target, harian, progress, komentar');
        $this->db->where('target.ID_TARGET = harian.ID_TARGET');
        $this->db->where('progress.ID_HARIAN = harian.ID_HARIAN');
        $this->db->where('komentar.ID_PROGRESS = progress.ID_PROGRESS');
        $this->db->where('target.ID_TARGET',$id_target);
        return $this->db->get();
    }

    function getProgressByTarget($id_target){
        $this->db->select('progress.*, santri.NAMA_SANTRI, santri.FOTO_SANTRI, DATE_FORMAT(progress.TANGGAL_PROGRESS , "%d %M %Y %H:%i:%s") AS TANGGAL_HARIAN');
        $this->db->from('target, harian, progress, santri');
        $this->db->where('target.ID_TARGET = harian.ID_TARGET');
        $this->db->where('progress.ID_HARIAN = harian.ID_HARIAN');
        $this->db->where('santri.ID_SANTRI = target.ID_SANTRI');
        $this->db->where('target.ID_TARGET',$id_target);
        $this->db->order_by('harian.TANGGAL_HARIAN','DESC');
        return $this->db->get();
    }

    function tambahKomen($data){
        $this->db->insert('komentar',$data);
    }

    function updateProfilKomen($nama_lama,$foto_lama,$komen){
        $this->db->where('NAMA_PENGIRIM', $nama_lama);
        $this->db->where('AVATAR_PENGIRIM', $foto_lama);
		$this->db->update('komentar', $komen);
    }
 
}