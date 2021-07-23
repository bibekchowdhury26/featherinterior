<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendors extends CI_Model{
    
    public function allVendor(){
        $query = $this->db->get('vendors')->result_array();
        return $query;
    }

    public function getVendor($id){
        $query = $this->db->where('id',$id)->get('vendors')->result_array();
        return $query;
    }

    public function updateVendor($id,$data){
        $this->db->where('id',$id)->update('vendors',$data);
        return true;
    }

    public function addVendor($data){
        $this->db->insert('vendors',$data);
        return true;
    }

    public function deleteVendor($id){
        $this->db->where('id',$id)->delete('vendors');
        return true;
    }
}

?>