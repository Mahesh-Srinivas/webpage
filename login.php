<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Form </title>
  <link rel="stylesheet" href="lo_gin.css">
</head>
<body>
<div class="login-box">
  <h2>Login</h2>
  <form method="POST" action="login.php">
      <div class="user-box">
        <input type="text" name="username" required="">
        <label>User ID</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="">
        <label>Password</label>
      </div>
      <a href="#" class="login-btn">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Login
      </a>
      <a href="resetpassword.html" class="reset-password">Reset Password</a>
  </form>
</div>  

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $(".login-btn").click(function(e) {
    e.preventDefault(); // Prevent default anchor behavior

    // Get the values of username and password inputs
    var username = $("input[name='username']").val();
    var password = $("input[name='password']").val();

    // Make an AJAX request to your PHP backend
    $.ajax({
      type: "POST",
      url: "login.php", // Update with your PHP script URL
      data: {
        username: username,
        password: password
      },
      success: function(response) {
        if (response === "success") {
          // Redirect to the welcome page or perform other actions
          window.location.href = "welcome.php";
        } else {
          // Handle login failure
          alert("Login failed. Please try again.");
        }
      }
    });
  });


  $(".reset-password").click(function(e) {
    e.preventDefault(); // Prevent default anchor behavior
    window.location.href = "resetpassword.html";
    // Implement your reset password logic here
    alert("Reset Password clicked.");
  });
});
</script>
</body>
</html>
