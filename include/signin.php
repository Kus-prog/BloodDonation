<!DOCTYPE html>
<head>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

    
</head>
<style>
  *{
    margin:0px;
    padding:0px;
  }
 
.backimage {
  background-image:url("login.jpg");
  margin:0px;
  
  
}
li{
  list-style:none;
}
.header{
  
  height:90px;
}
.header-logo {
  color:black;
  float: left;
  font-size: 35px;
  padding: 20px 40px;
  text-shadow: 2px 2px 4px #000000;
}

.header-list li {
  color:black;
  font-size:25px;
  float: left;
  padding: 33px 20px;
  text-shadow: 2px 2px 4px #000000;
}
h1, h2, h3, h4, h5, h6, a {
  margin:0; padding:0;
}
.login {
  margin:0 auto;
  max-width:500px;
}
.login-header {
  color:#fff;
  text-align:center;
  font-size:300%;
  margin-top:70px;
  font-family: cursive;
}

}
.login-form {
  border:.5px solid #fff;
  background:#4facff;
  border-radius:10px;
  box-shadow:0px 0px 10px #000;
}
.login-form h3 {
  text-align:left;
  margin-left:40px;
  color:#fff;
}
.login-form {
  box-sizing:border-box;
  padding-top:15px;
  padding-bottom:10%;
  margin:5% auto;
  text-align:center;
}
.login input[type="text"],
.login input[type="password"] {
  max-width:400px;
  width: 80%;
  line-height:3em;
  font-family: 'Ubuntu', sans-serif;
  margin:1em 2em;
  border-radius:5px;
  border:2px solid #f2f2f2;
  outline:none;
  padding-left:10px;
}
.login-form input[type="button"] {
  height:30px;
  width:100px;
  background:#fff;
  border:1px solid #f2f2f2;
  border-radius:20px;
  color: slategrey;
  text-transform:uppercase;
  font-family: 'Ubuntu', sans-serif;
  cursor:pointer;
}
.sign-up{
  color:#f2f2f2;
  margin-left:-70%;
  cursor:pointer;
  text-decoration:underline;
}
.no-access {
  color:#E86850;
  margin:20px 0px 20px -57%;
  text-decoration:underline;
  cursor:pointer;
}
.try-again {
  color:#f2f2f2;
  text-decoration:underline;
  cursor:pointer;
  margin:20px 0px 20px -57%;
}

/*Media Querie*/
@media only screen and (min-width : 150px) and (max-width : 530px){
  .login-form h3 {
    text-align:center;
    margin:0;
  }
  .sign-up, .no-access {
    margin:10px 0;
  }
  .login-button {
    margin-bottom:10px;
  }
}

</style>
<body class="backimage">
  <div class="header">
      <div class="header-logo" href="front.php">Blood Donation</div>
      <div class="header-list">
        <ul>
          <a href="front.php"><li>Home</li></a>

          <a href="search.php"><li>Search</li></a>
          <a href="donate.php"><li>Register</li></a>
          <a href="about.php"><li>About</li></a>




          
        </ul>
      </div>
    </div>

<div class="login">
  <div class="login-header">
    <h1>Login</h1>
  </div>
  <div class="login-form">
    <h3>Username:</h3>
    <input type="text" placeholder="Username"/><br>
    <h3>Password:</h3>
    <input type="password" placeholder="Password"/>
    <br>
    <input type="button" value="Login" class="login-button"/>
    <br>
    <a class="sign-up">Sign Up!</a>
    <br>
    <h6 class="no-access">Can't access your account?</h6>
  </div>
</div>
<div class="error-page">
  <div class="try-again">Error: Try again?</div>
</div>

</body>
</html>