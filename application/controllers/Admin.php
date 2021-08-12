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
				header('location:' . site_url('Admin/consultations'));
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
			$this->load->view('admin/services', $data);
		} else {
			header('location:' . site_url('Admin'));
		}
	}
	public function addservices()
	{
		$layout = 1;
		// layout = 0 -->view page
		// layout = 1 -->add page
		// layout = 2 -->edit page
		if (isset($_SESSION['admin'])) {
			if (!$this->input->post()) {
				$data['layout'] = $layout;
				$this->load->view('admin/services', $data);
			} else {
				$data = array(
					'service_id' => $this->input->post('service_id'),
					'service_name' => $this->input->post('service_name'),
					'service_desc' => $this->input->post('service_desc'),
				);
				// echo '<pre>';
				// print_R($data);
				// die;
				$this->load->model('Services');
				$confirm = $this->Services->addService($data);
				if ($confirm) {
					header('location:' . site_url('Admin/services'));
				} else {
					header('location:' . site_url('Admin/addservices'));
				}
			}
		} else {
			header('location:' . site_url('Admin'));
		}
	}
	public function editservices()
	{
		$layout = 2;
		// layout = 0 -->view page
		// layout = 1 -->add page
		// layout = 2 -->edit page
		if (isset($_SESSION['admin'])) {
			$this->load->model('Services');
			if (!$this->input->post()) {
				$id = $this->uri->segment(3);
				$service = $this->Services->getService($id);
				$data['service'] = $service;
				$data['layout'] = $layout;
				// echo '<pre>';
				// print_R($data);
				// die;
				$this->load->view('admin/services', $data);
			} else {
				$id = $this->input->post('id');
				$data = array(
					'service_id' => $this->input->post('service_id'),
					'service_name' => $this->input->post('service_name'),
					'service_desc' => $this->input->post('service_desc'),
				);
				// echo '<pre>';
				// print_R($data);
				// die;
				$confirm = $this->Services->updateService($id, $data);
				if ($confirm) {
					header('location:' . site_url('Admin/services'));
				} else {
					header('location:' . site_url('Admin/editservices'));
				}
			}
		} else {
			header('location:' . site_url('Admin'));
		}
	}
	public function delservices()
	{
		if (isset($_SESSION['admin'])) {
			$this->load->model('Services');
			$id = $this->uri->segment(3);
			$confirm = $this->Services->deleteService($id);
			if ($confirm) {
				header('location:' . site_url('Admin/services'));
			} else {
				echo '<script>alert("Something went wrong! Try again later.")</script>';;
			}
		} else {
			header('location:' . site_url('Admin'));
		}
	}
	public function teams()
	{
		$layout = 0;
		// layout = 0 -->view page
		// layout = 1 -->add page
		// layout = 2 -->edit page
		if (isset($_SESSION['admin'])) {
			$this->load->model('Teams');
			$teams = $this->Teams->allTeam();
			$data['teams'] = $teams;
			$data['layout'] = $layout;
			$this->load->view('admin/teams', $data);
		} else {
			header('location:' . site_url('Admin'));
		}
	}
	public function addTeams()
	{
		$layout = 1;
		// layout = 0 -->view page
		// layout = 1 -->add page
		// layout = 2 -->edit page
		if (isset($_SESSION['admin'])) {
			if (!$this->input->post()) {
				$data['layout'] = $layout;
				$this->load->view('Admin/teams', $data);
			} else {
				if ($_FILES['picture']['name']) {
					$config['upload_path'] = 'UserAssets/img/team/';
					$config['allowed_types'] = 'gif|jpg|png';

					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('picture')) {
						$data = array('error' => $this->upload->display_errors());
						$data['layout'] = $layout;
						$this->load->view('Admin/teams', $data);
					} else {
						$upload_data = $this->upload->data();
						$image_path = 'UserAssets/img/team/' . $upload_data['file_name'];

						$data = array(
							'pro_pic' => $image_path,
							'name' => $this->input->post('name'),
							'qualification' => $this->input->post('qualification'),
							'facebook_link' => $this->input->post('facebook_link'),
							'instagram_link' => $this->input->post('instagram_link'),
							'twitter_link' => $this->input->post('twitter_link'),
							'linkedin_link' => $this->input->post('linkedin_link'),
						);
					}
				} else {
					$data = array(
						'name' => $this->input->post('name'),
						'qualification' => $this->input->post('qualification'),
						'facebook_link' => $this->input->post('facebook_link'),
						'instagram_link' => $this->input->post('instagram_link'),
						'twitter_link' => $this->input->post('twitter_link'),
						'linkedin_link' => $this->input->post('linkedin_link'),

					);
				}
				// echo '<pre>';
				// print_R($data);
				// die;
				$this->load->model('Teams');
				$confirm = $this->Teams->addTeam($data);
				if ($confirm) {
					header('location:' . site_url('Admin/teams'));
				} else {
					header('location:' . site_url('Admin/addTeams'));
				}
			}
		} else {
			header('location:' . site_url('Admin'));
		}
	}
	public function editTeams()
	{
		$layout = 2;
		// layout = 0 -->view page
		// layout = 1 -->add page
		// layout = 2 -->edit page
		if (isset($_SESSION['admin'])) {
			$this->load->model('Teams');
			if (!$this->input->post()) {
				$id = $this->uri->segment(3);
				$team = $this->Teams->getTeam($id);
				$data['team'] = $team;
				$data['layout'] = $layout;
				// echo '<pre>';
				// print_R($data);
				// die;
				$this->load->view('Admin/teams', $data);
			} else {
				$id = $this->input->post('id');
				if ($_FILES['picture']['name']) {
					$config['upload_path'] = 'UserAssets/img/team/';
					$config['allowed_types'] = 'gif|jpg|png';

					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('picture')) {
						$data = array('error' => $this->upload->display_errors());
						$data['layout'] = $layout;
						$this->load->view('Admin/editTeams', $data);
					} else {
						$upload_data = $this->upload->data();
						$image_path = 'UserAssets/img/team/' . $upload_data['file_name'];

						$data = array(
							'pro_pic' => $image_path,
							'name' => $this->input->post('name'),
							'qualification' => $this->input->post('qualification'),
							'facebook_link' => $this->input->post('facebook_link'),
							'instagram_link' => $this->input->post('instagram_link'),
							'twitter_link' => $this->input->post('twitter_link'),
							'linkedin_link' => $this->input->post('linkedin_link'),
						);
					}
				} else {
					$data = array(
						'name' => $this->input->post('name'),
						'qualification' => $this->input->post('qualification'),
						'facebook_link' => $this->input->post('facebook_link'),
						'instagram_link' => $this->input->post('instagram_link'),
						'twitter_link' => $this->input->post('twitter_link'),
						'linkedin_link' => $this->input->post('linkedin_link'),

					);
				}
				// echo '<pre>';
				// print_R($data);
				// die;
				$confirm = $this->Teams->updateTeam($id, $data);
				if ($confirm) {
					header('location:' . site_url('Admin/teams'));
				} else {
					header('location:' . site_url('Admin/editTeams'));
				}
			}
		} else {
			header('location:' . site_url('Admin'));
		}
	}
	public function delTeams()
	{
		if (isset($_SESSION['admin'])) {
			$this->load->model('Teams');
			$id = $this->uri->segment(3);
			$confirm = $this->Teams->deleteTeam($id);
			if ($confirm) {
				header('location:' . site_url('Admin/teams'));
			} else {
				echo '<script>alert("Something went wrong! Try again later.")</script>';;
			}
		} else {
			header('location:' . site_url('Admin'));
		}
	}
	public function vendors()
	{
		$layout = 0;
		// layout = 0 -->view page
		// layout = 1 -->add page
		// layout = 2 -->edit page
		if (isset($_SESSION['admin'])) {
			$this->load->model('Vendors');
			$vendors = $this->Vendors->allVendor();
			$data['vendors'] = $vendors;
			$data['layout'] = $layout;
			$this->load->view('Admin/vendors', $data);
		} else {
			header('location:' . site_url('Admin'));
		}
	}
	public function addVendors()
	{
		$layout = 1;
		// layout = 0 -->view page
		// layout = 1 -->add page
		// layout = 2 -->edit page
		if (isset($_SESSION['admin'])) {
			if (!$this->input->post()) {
				$data['layout'] = $layout;
				$this->load->view('Admin/vendors', $data);
			} else {
				if ($_FILES['picture']['name']) {
					$config['upload_path'] = 'UserAssets/img/vendor/';
					$config['allowed_types'] = 'gif|jpg|png';

					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('picture')) {
						$data = array('error' => $this->upload->display_errors());
						$data['layout'] = $layout;
						$this->load->view('Admin/vendors', $data);
					} else {
						$upload_data = $this->upload->data();
						$image_path = 'UserAssets/img/vendor/' . $upload_data['file_name'];

						$data = array(
							'vendor_logo' => $image_path,
							'vendor_name' => $this->input->post('vendor_name'),
							'description' => $this->input->post('description'),
						);
					}
				} else {
					$data = array(
						'vendor_name' => $this->input->post('vendor_name'),
						'description' => $this->input->post('description'),
					);
				}
				// echo '<pre>';
				// print_R($data);
				// die;
				$this->load->model('Vendors');
				$confirm = $this->Vendors->addVendor($data);
				if ($confirm) {
					header('location:' . site_url('Admin/vendors'));
				} else {
					header('location:' . site_url('Admin/addVendors'));
				}
			}
		} else {
			header('location:' . site_url('Admin'));
		}
	}
	public function editVendors()
	{
		$layout = 2;
		// layout = 0 -->view page
		// layout = 1 -->add page
		// layout = 2 -->edit page
		if (isset($_SESSION['admin'])) {
			$this->load->model('Vendors');
			if (!$this->input->post()) {
				$id = $this->uri->segment(3);
				$vendor = $this->Vendors->getVendor($id);
				$data['vendor'] = $vendor;
				$data['layout'] = $layout;
				// echo '<pre>';
				// print_R($data);
				// die;
				$this->load->view('Admin/vendors', $data);
			} else {
				$id = $this->input->post('id');
				if ($_FILES['picture']['name']) {
					$config['upload_path'] = 'UserAssets/img/vendor/';
					$config['allowed_types'] = 'gif|jpg|png';

					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('picture')) {
						$data = array('error' => $this->upload->display_errors());
						$data['layout'] = $layout;
						$this->load->view('Admin/editVendors', $data);
					} else {
						$upload_data = $this->upload->data();
						$image_path = 'UserAssets/img/vendor/' . $upload_data['file_name'];

						$data = array(
							'vendor_logo' => $image_path,
							'vendor_name' => $this->input->post('vendor_name'),
							'description' => $this->input->post('description'),
						);
					}
				} else {
					$data = array(
						'vendor_name' => $this->input->post('vendor_name'),
						'description' => $this->input->post('description'),

					);
				}
				// echo '<pre>';
				// print_R($data);
				// die;
				$confirm = $this->Vendors->updateVendor($id, $data);
				if ($confirm) {
					header('location:' . site_url('Admin/vendors'));
				} else {
					header('location:' . site_url('Admin/editVendors'));
				}
			}
		} else {
			header('location:' . site_url('Admin'));
		}
	}
	public function delVendors()
	{
		if (isset($_SESSION['admin'])) {
			$this->load->model('Vendors');
			$id = $this->uri->segment(3);
			$confirm = $this->Vendors->deleteVendor($id);
			if ($confirm) {
				header('location:' . site_url('Admin/vendors'));
			} else {
				echo '<script>alert("Something went wrong! Try again later.")</script>';;
			}
		} else {
			header('location:' . site_url('Admin'));
		}
	}
	public function consultations()
	{
		// $layout = 0;
		// layout = 0 -->view page
		// layout = 1 -->add page
		// layout = 2 -->edit page
		if (isset($_SESSION['admin'])) {
			$this->load->model('Consultations');
			$consultations = $this->Consultations->allConsultation();
			$data['consultations'] = $consultations;
			// $data['layout'] = $layout;
			$this->load->view('admin/consultations', $data);
		} else {
			header('location:' . site_url('Admin'));
		}
	}
	public function estimates()
	{
		// $layout = 0;
		// layout = 0 -->view page
		// layout = 1 -->add page
		// layout = 2 -->edit page
		if (isset($_SESSION['admin'])) {
			$this->load->model('Estimates');
			$estimates = $this->Estimates->allEstimate();
			$data['estimates'] = $estimates;
			// $data['layout'] = $layout;
			$this->load->view('admin/estimates', $data);
		} else {
			header('location:' . site_url('Admin'));
		}
	}
}