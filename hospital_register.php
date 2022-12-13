<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hospital Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<br>
<br>
<br>
<div class="container">
  <h2>Register</h2>
  <form action="action/user_insert.php" method="post" enctype='multipart/form-data'>
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="user_name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="user_email">
    </div>
    
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="user_pswd">
    </div>
    <div class="form-group">
      <label for="email">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
    </div>
  
    <div class="form-group">
      <label for="email">Contact Number:</label>
      <input type="number" class="form-control" id="number" placeholder="Enter contact number" name="cont_number">
    </div>
  
    <div class="form-group">
      <label for="email">City</label>
    <select name="city">
      <option value="0">Select City</option>
      <option value="karachi">karachi</option>
      <option value="lahore">lahore</option>
      <option>
</select>
<div>

<div class="form-group">
      <label for="email">REgion</label>
    <select name="city">
      <option value="0">Select Region</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option>
</select>
</div>
</div>
    <button type="submit" class="btn btn-primary" name='register'>Submit</button>
  </form>
</div>

</body>
</html>
