<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Lab 7</title>

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="css/lab7.css" rel="stylesheet">

</head>

<body>
<div class="container">
   <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
         <div id="login">
            <div class="page-header">
               <h2>Login</h2>
            </div>
            <?php include "lab7-data.php"; ?>
            <form role="form">
              <div class="form-group <?php echo empty($email) ? "has-error" : ""; ?>">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" value=<?php echo htmlspecialchars($email); ?>>
                <?php
                  if (empty($email)) {
                    echo "<p class=\"help-block\">Enter an email</p>";
                  }
                ?>
              </div>
              <div class="form-group <?php echo empty($password) ? "has-error" : ""; ?>">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" value=<?php echo htmlspecialchars($password); ?>>
                <?php
                  if (empty($password)) {
                    echo "<p class=\"help-block\">Enter a password</p>";
                  }
                ?>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Server</label>
                <select name="server" class="form-control">
                  <!--Replace the following elements with PHP-->
                  <?php
                    for ($i = 0; $i < 5; $i++) {
                        echo "<option>Server ";
                        echo $i+1;
                        echo "</option>";
                    }
                  ?>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
      <div class="col-md-3">
      </div>
   </div>
</div>  <!-- end container -->

 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>
</body>
</html>
