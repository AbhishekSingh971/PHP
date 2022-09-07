<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    li:hover {
      background-color: coral;
      border: 1px solid black;
      border-radius: 20PX;
    }
  </style>
</head>

<body>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info ">
      <div class="container-fluid">
        <div class="nav-bar-header">
          <a class="navbar-brand" href="#">Gadget</a>
        </div>

        <ul class="nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Session_main_page.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
        <span class="navbar-text">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="Session_Signup_page.php">Sign up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="Session_Login_page.php">Login</a>
            </li>
            <ul>
        </span>
      </div>
    </nav>

    <body bgcolor="white">
      <h1 style="border:10px solid crimson;padding:10px;color:deepskyblue;text-align:center;border-radius:10px;"><B>Sign-up</B></h1>
      <b>Abhishek Kumar Singh</b><br>
      <!-- <h2 style="color:coral;text-align:center;">Sign-up</h2> -->
      <p style="color:coral;text-align:center;">WE REQUEST YOU TO KINDLY FILL THIS FORM:</P>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div style="color:lightseagreen;text-align:center;">
          FIRST NAME:<input type="text" name="fname" placeholder="first name"><br><br>
          LAST NAME:<input type="text" name="lname" placeholder="last name"><br><br>
          DATE OF BIRTH:<input type="text" name="DOB" placeholder="DD/MM/YY"><br><br>
          EMAIL ID:<input type="email" name="email-id" placeholder="Email-id"><br><br>
          MOBILE NO:<input type="text" name="phone" placeholder="10 digit number"><br><br>

        </div>
        <div class="but" style="text-align:center">
          <input style="border:2px solid black;border-radius:5px;font-size:large;" type="submit" name="submit">
          <input style="border:2px solid black;border-radius:5px;font-size:large;" type="reset" name="reset">
        </div>
        <br>
        <h1 style="color:chartreuse;border:5px solid blue;text-align:center;">Your Input</h1>
        <?php
        $_session["email"] = "successful";
        // print_r($_session);
        if (isset($_session["email"])) {
          echo $_session['email'];
        }
        ?>
    </body>

</html>

<?php
if (isset($_POST['submit'])) {
  echo $_POST['fname'];
  echo "<br>";
  echo $_POST['lname'];
  echo "<br>";
  echo $_POST['DOB'];
  echo "<br>";
  echo $_POST['email-id'];
  echo "<br>";
  echo $_POST['phone'];
}
?>
<?php
session_destroy();
?>
</body>

</html>