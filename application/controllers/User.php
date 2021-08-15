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

    public function ImageGallery(){
        $image_id = NULL;
        $cat_id = NULL;
        $par_cat_id = NULL;
        if($this->uri->segment(5)){
            $image_id = $this->uri->segment(5);
            $cat_id = $this->uri->segment(4);
            $par_cat_id = $this->uri->segment(3);
            $data['parent_category'] = $this->db->where('category_id',$par_cat_id)->get('gallery_category')->result_array();
            $data['category'] = $this->db->where('category_id',$cat_id)->get('gallery_category')->result_array();
        }elseif($this->uri->segment(4)){
            $image_id = $this->uri->segment(4);
            $cat_id = $this->uri->segment(3);
            $data['parent_category'] = $this->db->where('category_id',$cat_id)->get('gallery_category')->result_array();
        }
        $data['selected'] = $this->db->where('image_id',$image_id)->get('gallery_images')->result_array();
        $search = array(
            'image_id !=' => $image_id,
            'category_id' => $cat_id
        );
        $data['related'] = $this->db->where($search)->order_by('rand()')->limit(3)->get('gallery_images')->result_array();
        // echo '<pre>';Print_R($data['related']);die;
        $this->load->model('Gallery');
		$data['gallery'] = $this->Gallery->allCategory();
        $this->load->view('userUI/image-gallery',$data);
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