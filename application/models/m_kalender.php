<?php
class m_kalender extends CI_Model{

    function kalenderAbsenBySantri($id_santri){
        $this->db->select('target.*, harian.`TANGGAL_HARIAN`, progress.*, penguji.NAMA_PENGUJI, DATE_FORMAT(target.BATAS_UPLOAD, "%d %M %Y") AS BTS_UPLOAD');
        $this->db->from('santri, penguji, target, harian, progress');
        $this->db->where('santri.ID_SANTRI = target.ID_SANTRI');
        $this->db->where('penguji.ID_PENGUJI = target.ID_PENGUJI');
        $this->db->where('harian.ID_TARGET = target.ID_TARGET');
        $this->db->where('progress.ID_HARIAN = harian.ID_HARIAN');
        $this->db->where('santri.ID_SANTRI',$id_santri);
        $this->db->order_by('progress.ID_PROGRESS', 'ASC');
        return $this->db->get();
    }
}