<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
	public function index()
	{
		$this->load->view('admin/login');
	}
	public function login()
	{
		if ($this->input->post()) {

			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
			);
			$confirm = $this->db->where($data)
				->get('admin')
				->result_array();

			if ($confirm != null) {
				// echo 'loged in';
				// die;

				$_SESSION['admin'] = $confirm[0]['username'];
				header('location:' . site_url('Admin/home'));
			} else {
				// echo 'error';
				// die;
				header('location:' . site_url('Admin'));
			}
		}
	}
	public function home()
	{
		if (isset($_SESSION['admin'])) {
			$data['bookings'] = $this->db->get('contact_details')->result_array();
			$this->load->view('admin/dashboard', $data);
		} else {
			header('location:' . site_url('Admin'));
		}
	}
	public function logout()
	{
		unset($_SESSION['admin']);
		header('location:' . site_url('Admin'));
	}
	public function services()
	{
		$layout = 0;
		// layout = 0 -->view page
		// layout = 1 -->add page
		// layout = 2 -->edit page

		if (isset($_SESSION['admin'])) {
			$this->load->model('Services');
			$services = $this->Services->allService();
			// echo '<pre>';
			// print_R($services);
			// die;
			$data['services'] = $services;

			$data['layout'] = $layout;
			$this->load->view('Admin/services', $data);
		} else {
			header('location:' . site_url('Admin'));
		}
	}
	public function teams()
	{
		if (isset($_SESSION['admin'])) {
			$this->load->view('Admin/teams');
		} else {
			header('location:' . site_url('Admin'));
		}
	}
	public function vendors()
	{
		if (isset($_SESSION['admin'])) {
			$this->load->view('Admin/vendors');
		} else {
			header('location:' . site_url('Admin'));
		}
	}
}
