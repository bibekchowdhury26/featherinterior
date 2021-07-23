<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <title>Admin Panel</title>
    <style>
        body{
        }
        .container{
            background: #e6b5ae;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Feather Interiors</h1>
        <div class="row justify-content-center">
            <div class="col-10 col-sm-10 col-md-8 col-lg-8 p-5">
                <form action="<?php echo site_url('Admin/login') ?>" method="post">
                    <h3 class="text-center">Admin Panel</h3>
                    <div class="form-group"><input type="text" class="form-control" required placeholder="Usernane" name="username" id=""></div>
                    <div class="form-group"><input type="password" class="form-control" required placeholder="Password" name="password" id=""></div>
                    <center><button type="submit" class="btn btn-primary btn-block">Log In</button></center>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>