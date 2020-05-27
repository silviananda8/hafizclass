<?php
class m_penguji extends CI_Model{

    function regisSantri($data){
        $this->db->insert('santri', $data);
    }
    
    function regisPenguji($data){
        $this->db->insert('penguji', $data);
    }
 
}