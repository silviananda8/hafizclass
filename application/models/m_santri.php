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
}