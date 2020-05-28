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

    function semuaSantri(){
        $this->db->select('santri.*,penguji.NAMA_PENGUJI');
        $this->db->from('santri, penguji');
        $this->db->where('santri.ID_PENGUJI = penguji.ID_PENGUJI');
        $query = $this->db->get();
        return $query;
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
        $query = $this->db->query("SELECT penguji.NAMA_PENGUJI from penguji WHERE penguji.ID_PENGUJI NOT IN (SELECT ID_PENGUJI FROM santri WHERE ID_SANTRI='$id_santri')");
        return $query;
    }

    function listPenguji(){
        $this->db->select('NAMA_PENGUJI,ID_PENGUJI');
        $query = $this->db->get('penguji');
        return $query;
    }

    function listTargetBySantri($id_santri){
        $this->db->select('target.*, penguji.NAMA_PENGUJI, DATE_FORMAT(target.BATAS_UPLOAD, "%d %M %Y") AS BTS_UPLOAD');
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
    
}