<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_Model extends CI_Model
{
    public function adduser($data)
    {
        $userDet = array(
            'name' => $data['name'],
            'email_id' =>  $data['email_id'],
        );
        // echo "<pre>";
        // print_r($userDet);
        // die;
        $this->db->insert('user_registration', $data);
        $this->db->insert('user', $userDet);

        $q = $this->db->where($data)
            ->get('user_registration');
        if ($q->num_rows()) {
            return $q->row('email_id');
        } else {
            return False;
        }
    }

    public function checklogin($data)
    {
        $q = $this->db->where($data)
            ->get('user_registration');
        if ($q->num_rows()) {
            return $q->row('email_id');
        } else {
            return False;
        }
    }
}
