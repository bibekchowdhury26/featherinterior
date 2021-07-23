<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Model{
    
    public function allService(){
        $services = $this->db->get('services')->result_array();
        return $services;
    }

    public function getService($id){
        $services = $this->db->where('id',$id)->get('services')->result_array();
        return $services;
    }

    public function updateService($id,$data){
        $this->db->where('id',$id)->update('services',$data);
        return true;
    }

    public function addService($data){
        $this->db->insert('services',$data);
        return true;
    }

    public function deleteService($id){
        $this->db->where('id',$id)->delete('services');
        return true;
    }
}

?>