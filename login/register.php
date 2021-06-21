<?php include('process.php') ?>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<style></style>
</head>
<body>
  <div class="form-wrapper">
  <form method="post" action="register.php" id="register_form">
  	<h1>Register</h1>
  	 <div class="form-item">
            <div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
        	  <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
        	  <?php if (isset($name_error)): ?>
        	  	<span><?php echo $name_error; ?></span>
        	  <?php endif ?>
          	</div>
     </div>
  	 <div class="form-item">
            <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
              <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
              <?php if (isset($email_error)): ?>
              	<span><?php echo $email_error; ?></span>
              <?php endif ?>
          	</div>
     </div>
  	 <div class="form-item">
           
            		<input type="password"  placeholder="Password" name="password">
            	
    </div>
  	<div class="button-panel">
            
            		<button type="submit"  class="button" name="register" id="reg_btn">Register</button>
            	
  </div>
  </form></div>
  </body>
</html>