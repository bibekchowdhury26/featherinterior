<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->model('Vendors');
		$data['vendors'] = $this->Vendors->allVendor();
		
		$data['services'] = $this->Services->allService();
		$this->load->model('Gallery');
		$data['gallery'] = $this->Gallery->allCategory();
		// echo '<pre>'; print_R($data['gallery']);die;
		$this->load->view('userUI/index',$data);
	}

	public function getEstimate(){
		$this->load->view('userUi/getEstimate');
	}

	public function contactMe(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email ID', 'required');
		$this->form_validation->set_rules('phone_no', 'Phone No.', 'required');

		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('index');
		}
		else
		{
			$data = array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'phone_no'=>$this->input->post('phone_no'),
			);
			$this->db->insert('contact_details',$data);
			$confirm = $this->db->where('email',$data['email'])
								->get('contact_details')
								->result_array();
			if($confirm != ''){
				$from_email = "santanugr28@gmail.com"; 
				$to_email = $confirm[0]['email']; 

						$e_subject = 'Welcome to Feather Interioirs';
						$data = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">
				<head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<title>Demystifying Email Design</title>
				<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			
				<style type="text/css">
					a[x-apple-data-detectors] {color: inherit !important;}
				</style>
				
				</head>
				<body style="margin: 0; padding: 0;">
				<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
					<td style="padding: 20px 0 30px 0;">
				
				<table align="center" border="1" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #cccccc;">
				<tr>
					<td align="center"  style="padding: 40px 0 30px 0;background:#121B60;">
					<img src="'.base_url('images/logo1.png').'" alt="Feather" width="300" height="130" style="display: block;" />
					</td>
				</tr>
				<tr>
					<td align="center" style="padding:12px;>Feather Interiors</td>
				</tr>
				<tr>
					<td align="center" style="padding:12px;>We will get in touch with you shortly</td>
				</tr>
				<tr>
					<td bgcolor="#121B60" style="padding: 30px 30px;">
						<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
						<tr>
						<td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;">
							<p style="margin: 0;">&reg; India<br/> 
						<a href="'.site_url().'" style="color: #ffffff;">Feather Interiors @2021</a> All Rights Reserved</p>
						</td>
						</tr>
					</table>
					</td>
				</tr>
				</table>
				
					</td>
					</tr>
				</table>
				</body>
				</html>';


						// Configuration option.
						// You can change this if you feel that you need to.
						// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.

						$e_body = "You have been contacted with regards." . PHP_EOL;
						$e_content = "\"$data\"" . PHP_EOL;
						$e_reply = "You can contact Santanu Guha Roy via email, $from_email ";

						$msg = wordwrap($e_body . $e_content . $e_reply, 70);

						$headers = "From: $from_email" . PHP_EOL;
						$headers .= "Reply-To: $from_email" . PHP_EOL;
						$headers .= "MIME-Version: 1.0" . PHP_EOL;
						$headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;
						//$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

						//mail($address, $e_subject, $msg, $headers);


						// Send email
						if (mail($to_email, $e_subject, $msg, $headers)) {
						$status = 1;
						//header('location:contact.php');  
						// echo "email sent";
						$this->load->view('success');
						} else {
						$status = 0;
						echo 'Email sending failed.';
						}
				
			}else{
				echo "error";
			}
				// $this->load->view('submited');
		}
	}

	public function inner(){
		$this->load->view('userUI/image-gallery');
	}
}