<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teams extends CI_Model{
    
    public function allTeam(){
        $query = $this->db->get('teams')->result_array();
        return $query;
    }

    public function getTeam($id){
        $query = $this->db->where('id',$id)->get('teams')->result_array();
        return $query;
    }

    public function updateTeam($id,$data){
        $this->db->where('id',$id)->update('teams',$data);
        return true;
    }

    public function addTeam($data){
        $this->db->insert('teams',$data);
        return true;
    }

    public function deleteTeam($id){
        $this->db->where('id',$id)->delete('teams');
        return true;
    }
}

?>