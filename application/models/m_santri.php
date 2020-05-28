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
}