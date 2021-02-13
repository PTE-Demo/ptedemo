<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pécsi Tudományegyetem</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="navigation">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Faculties</a></li>
            <li><a href="#">Contacts</a></li>
        </ul>
        <div class="accounts">
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Sign up</a></li>
        </div>

    </div>

    <div class="container">
      <div class="account">
        <p style="font-size:20px;">Pécsi Tudományegyetem <?php echo $_POST['fname']; ?> </p>

      </div>
      <div class="categories" style="">
        <h1>Select Track</h1>
        <ul>
          <li class="dropdown"><button class="dropbtn">Business & Economics<i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
              <a href="#">Finance</a>
              <a href="#">Business administration</a>
              <a href="#">Project Management</a>
            </div>
          </li>
          <li class="dropdown"><button class="dropbtn">Medical school<i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
              <a href="#">Pharmacy</a>
              <a href="#">General Medicine</a>
              <a href="#">Dentistry</a>
            </div>
          </li>
          <li class="dropdown"><button class="dropbtn">Engineering and IT<i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
              <a href="#">Civil Engineering</a>
              <a href="#">Electrical Engineering</a>
              <a href="#">Computer Science Engineering</a>
            </div>
          </li>
          <li class="dropdown"><button class="dropbtn">Sciences<i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
              <a href="#">Biology</a>
              <a href="#">Computer science</a>
              <a href="#">Mathematics</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer">
        <div class="footer-labels">
            <ul class="left-footer">
                <li>About Us</li>
            </ul>
            <ul class="right-footer">
                <li>Social</li>
            </ul>
        </div>
    </div>
    <div class="slogan">
        <p>&copy; 2021 Fidel Gatimu</p>
    </div>
</body>
</html>
