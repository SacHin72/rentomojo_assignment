<html>
<head>
<title><h1 align='center'> LOGIN PAGE</h1></title>
<link rel="stylesheet" type="text/css" href="CSSS.css">
<link rel="stylesheet" type=text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
 <div class="container">
 <div class="login-box">
 <div class="row">
 
 
 
 <div class="col-md-6">
 <h2> LOGIN</h2>
 <form action="validation.php" method="post">
 <div class="form-group">
 <label>username</label>
 <input type="text" name ="user" class="form-control" required>
 </div>
  <div class="form-group">
 <label>Password</label>
 <input type="password" name ="user" class="form-control" required>
 </div>
<button type="submit" class="btn btn-primary">Login</button>
</form>
</div>




<div class="col-md-6">
 <h2> Registration</h2>
 <form action="registration.php" method="post">
 <div class="form-group">
 <label>username</label>
 <input type="text" name ="user" class="form-control" required>
 </div>
  <div class="form-group">
 <label>Password</label>
 <input type="password" name ="user" class="form-control" required>
 </div>
<button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
</div>
</body>
</html>