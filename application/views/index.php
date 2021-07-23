<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
	<title>Feather Interior</title>
	<style type="text/css">
	.mainrow{
		height: 100vh;
	}
	.left{
		background-image: url('<?php echo base_url('images/sofa_bg.jpg') ?>');
		background-size: cover;
		background-position: center;
		padding: 30px 50px;
	}
	.logo{
		height: 160px;
		width: 180px;
		background: transparent;
		border: 0px;
	}
	.right{
		background-image: url('<?php echo base_url('images/bg_right.jpg') ?>');
		background-size: cover;
		background-position: center;
		padding-top: 150px;
		padding-bottom: 150px;
	}
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}
	label{
		display:none;
	}
	.form-group{
		padding: 15px 30px;
	}
	hr{
		width: 50px;
		border: 3px solid #ad1533;
		border-radius: 5px;
		background: #ad1533;
	}
	.fab{
		font-size: 40px;
		color: black;
	}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row mainrow">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 left">
				<center>
					<img src="<?php echo base_url('images/logo1.png') ?>" class="img-thumbnail logo" alt="logo">
					<h2 class="text-weight-bolder p-1 mt-3">OUR EXPERTISE FOR FEEL MORE <br><span class="text-danger">COMFORTABLE</span>  ON YOUR HOME</h2>
					<p class="mt-5">Free 3D and 2D designs for first 30 members</p>
					<hr>
				</center>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 right">
				<form action="<?php echo site_url('Welcome/contactMe') ?>" method="post">
					<h3 class="form-header mb-5 text-white text-center">FREE ONLINE CONSULTATION</h3>
					<div class="form-group row justify-content-center">
						<label for="name">Full Name</label>
						<input type="text" class="form-control col-6" required name="name" id="name" placeholder="Full Name">
					</div>
					<div class="form-group row justify-content-center">
						<label for="email">Email ID</label>
						<input type="email" class="form-control col-6" required name="email" id="email" placeholder="Email ID">
					</div>
					<div class="form-group row justify-content-center">
						<label for="phone_no">Phone No.</label>
						<input type="tel" class="form-control col-6" required name="phone_no" id="phone_no" placeholder="Phone No.">
					</div>
					<div class="form-group">
						<center>
							<button type="submit" class="btn btn-dark btn-lg text-white text-weight-bold">Contact Me</button>
						</center>
					</div>
				</form>
				<div class="d-flex justify-content-between mt-5">
					<div class="col text-center"><a href=""><i class="fab fa-linkedin"></i></a></div>
					<div class="col text-center"><a href=""><i class="fab fa-facebook-f"></i></a></div>
					<div class="col text-center"><a href=""><i class="fab fa-twitter"></i></a></div>
					<div class="col text-center"><a href=""><i class="fab fa-google-plus-g"></i></a></div>
					<div class="col text-center"><a href=""><i class="fab fa-instagram"></i></a></div>
				</div>
			</div>
		</div>
	
	
	</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>