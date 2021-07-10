<?php
   require APPROOT . '/views/includes/head.php';
?>

<body style="background-image: url('<?= URLROOT ?>/public/img/banner.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">

    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>


<!-- mine -->
<div class="container text-white d-flex text-light" style="font-family: 'Montserrat'; height: 50vh">
		<div class="col-md-4 offset-md-4 align-self-center" style="margin-top: 20vh">
			<h2 style="font-family: 'Carrois Gothic SC', sans-serif;">Langsung Login!</h3><br>
			<form action="<?php echo URLROOT; ?>/users/login" method="POST">
			  <div class="form-group">
			    <label for="inputUsername">Username</label>
			    <input required="" name="username" type="text" class="form-control" id="inputUsername" placeholder="Username" autocomplete="off">
                <span class="invalidFeedback">
                    <?php echo $data['usernameError']; ?>
                </span>
              </div>
			  <div class="form-group">
			    <label for="inputPassword">Password</label>
			    <input required="" name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
                <span class="invalidFeedback">
                    <?php echo $data['passwordError']; ?>
                </span>
              </div>
			  <button type="submit" name="submit" class="btn btn-success" >Sign In</button>
			   &emsp; &emsp; <small class="text-light" style="">Need an account? <a href="<?php echo URLROOT; ?>/users/register" style="color:#6ee096">Sign Up</a> now.</small>
			</form>
		</div>
	</div>