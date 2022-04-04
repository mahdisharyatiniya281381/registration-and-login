<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>ادیت پروفایل</h2>
  </div>
  <form method="post" action="register.php">
  	<div class="input-group">
  	  <label>نام کاربری</label>
  	  <input class="input" type="text" name="username" value="" >
  	</div>
  	<div class="input-group">
  	  <label>ایمیل</label>
  	  <input class="input" type="email" name="email" value="" >
  	</div>
  	<div class="input-group">
  	  <label>رمز</label>
  	  <input class="input" type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>تکرار رمز</label>
  	  <input type="password" name="password_2">
  	</div>
  	<p>
     
  	<a href="" class="button is-warning">ثبت</a>
  	</p>
  </form>
</body>
</html>
