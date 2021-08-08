<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Estimates extends CI_Model
{

    public function allEstimate()
    {
        $query = $this->db->get('estimates')->result_array();
        return $query;
    }

    public function getEstimate($id)
    {
        $query = $this->db->where('id', $id)->get('estimates')->result_array();
        return $query;
    }

    public function updateEstimate($id, $data)
    {
        $this->db->where('id', $id)->update('estimates', $data);
        return true;
    }

    public function addEstimate($data)
    {
        $this->db->insert('estimates', $data);
        return true;
    }

    public function deleteEstimate($id)
    {
        $this->db->where('id', $id)->delete('estimates');
        return true;
    }
}
