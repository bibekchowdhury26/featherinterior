<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Model
{

    public function allCategory()
    {
        $query = $this->db->get('gallery_category')
            ->join('gallery_images', 'gallery_images.category_id = gallery_category.category_id')
            ->result_array();
        return $query;
    }

    public function viewCategories()
    {
        $query = $this->db->get('gallery_category')->result_array();
        return $query;
    }

    public function parentCategories()
    {
        $query = $this->db->where('parent_category_id', NULL)->get('gallery_category')->result_array();
        return $query;
    }

    public function addCategories($data)
    {
        $this->db->insert('gallery_category', $data);
        return true;
    }

    public function deleteCategories($id)
    {
        $this->db->where('id', $id)->delete('gallery_category');
        return true;
    }

    public function viewImages()
    {
        $query = $this->db->get('gallery_images')->result_array();
        return $query;
    }

    public function deleteImage($id)
    {
        $this->db->where('id', $id)->delete('gallery_images');
        return true;
    }

    public function getTeam($id)
    {
        $query = $this->db->where('id', $id)->get('teams')->result_array();
        return $query;
    }

    public function updateTeam($id, $data)
    {
        $this->db->where('id', $id)->update('teams', $data);
        return true;
    }

    public function addTeam($data)
    {
        $this->db->insert('teams', $data);
        return true;
    }

    public function deleteTeam($id)
    {
        $this->db->where('id', $id)->delete('teams');
        return true;
    }
}
