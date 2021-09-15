<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blogs extends CI_Model
{

    public function allBlogs()
    {
        $query = $this->db->get('blogs')->result_array();
        return $query;
    }

    public function getBlog($id)
    {
        $query = $this->db->where('id', $id)->get('blogs')->result_array();
        return $query;
    }

    public function updateBlog($id, $data)
    {
        $this->db->where('id', $id)->update('blogs', $data);
        return true;
    }

    public function addBlog($data)
    {
        $this->db->insert('blogs', $data);
        return true;
    }

    public function deleteBlog($id)
    {
        $this->db->where('id', $id)->delete('blogs');
        return true;
    }
}
