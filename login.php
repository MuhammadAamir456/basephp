<?php
//print_r($_GET);
$username = $_GET['username'];
$password = $_GET['password'];

if ($username == 'admin' && $password == 'test'){

      header('Location: http://localhost/base/dashboard.php/');
      exit;

}else{
  echo "username or password is wrong";
}
//print($username);
//print($password);

?>
<head>
<body>
        <div class="container">
           <form action=""> 
                  <div class="feild-group">
                        <lable>Username</lable>
                        <input type="text" name="username"/>
                  </div>
                  <div class="feild-group">
                        <lable>Password</lable>
                        <input type="password" name="password"/>
                  </div>
                     <div class="feild-group">
                        <input type="submit" name="" value="login"/>
                  </div>
              </form>
        </div>

    </body>


</head>