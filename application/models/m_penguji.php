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
}