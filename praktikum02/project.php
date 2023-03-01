<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<form action="projek_post.php" method = "POST">
  <div class="form-group">
    <label for="username">Username</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-user"></i>
        </div>
      </div> 
      <input id="username" name="username" placeholder="masukkan username" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="password">Password</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-lock"></i>
        </div>
      </div> 
      <input id="password" name="password" placeholder="masukkan password" type="password" required="required" class="form-control">
    </div>
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">LOGIN</button>
  </div>
</form>
</body>
</html>