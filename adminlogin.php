
<html>
<head>
<title>prompter Admin create</title>
<link rel="stylesheet" href="css/index.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <style>
  label{
	  font-weight:bold;
  }
  </style>
</head>
<body style="background-color:rgba(0,0,0,0.1);">
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
     
      <a class="nav-link" href="logout.php" style="font-weight:bold;">Log Out</a>
    </li>
    
  </ul>
</nav>
<form method="POST" action="insert.php">
<div class="container" style="width:50%;">

      <h1 style="text-align:center; font-weight:bold;">Create User for Prompter!</h1><br>
	  <label>User Type</label>
	  <div class="form-group">
	  <select class="form-control" id="select_send_type" name="usertype">
	  <option value="0">Select Any One</option>
	  <option value="administrator">Administrator</option>
	  <option value="manager">Manager</option>
	  <option value="standard">Standard</option>
	  </select></div>
	    <div class="form-group">
    <label for="name">Enter Your Name:</label>
    <input type="text" class="form-control" placeholder="Enter Name" id="email" name="user_name">
  </div>
    <div class="form-group">
    <label for="email">Enter Your Email Id:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="user_mail_id">
  </div>
    <div class="form-group">
    <label for="pwd">Create Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="user_password">
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary" id="submit" name="submit" style="width:100%;font-weight:bold; line-height:20px;">Insert</button>
	  </div>
     </div>
	 </form>
	 </body>
	 </html>