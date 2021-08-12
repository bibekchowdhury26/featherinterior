<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function register()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'email_id' => $this->input->post('email_id'),
            'password' => $this->input->post('password')
        );
        // echo "<pre>";
        // print_r($data);
        // die;
        $q = $this->User_Model->adduser($data);
        if ($q) {
            $_SESSION['email_id'] = $q;
            $_SESSION['userLog'] = true;
            header('location:' . site_url('Welcome/index'));
        } else {
            header('location:' . site_url('Welcome/index'));
        }
    }

    public function getConsultation(){
        $this->db->insert('consultations',$this->input->post());
        header('location:'.site_url());
    }

    public function login()
    {
        $data = array(
            'email_id' => $this->input->post('email_id'),
            'password' => $this->input->post('password')
        );
        $q = $this->User_Model->checklogin($data);
        if ($q) {
            $_SESSION['email_id'] = $q;
            $_SESSION['userLog'] = true;
            header('location:' . site_url('Welcome/index'));
        } else {
            header('location:' . site_url('Welcome/index'));
        }
    }

    public function logout()
    {
        unset($_SESSION['email_id']);
        unset($_SESSION['userLog']);
        header('location:' . site_url('Welcome/index'));
    }
}