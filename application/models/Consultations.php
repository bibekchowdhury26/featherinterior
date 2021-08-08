<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Consultations extends CI_Model
{

    public function allConsultation()
    {
        $query = $this->db->get('consultations')->result_array();
        return $query;
    }

    public function getConsultation($id)
    {
        $query = $this->db->where('id', $id)->get('consultations')->result_array();
        return $query;
    }

    public function updateConsultation($id, $data)
    {
        $this->db->where('id', $id)->update('consultations', $data);
        return true;
    }

    public function addConsultation($data)
    {
        $this->db->insert('consultations', $data);
        return true;
    }

    public function deleteConsultation($id)
    {
        $this->db->where('id', $id)->delete('consultations');
        return true;
    }
}
