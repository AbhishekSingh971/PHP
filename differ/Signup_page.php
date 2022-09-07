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
            <a class="nav-link" aria-current="page" href="main_page.php">Home</a>
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
              <a class="nav-link" href="Signup_page.php">Sign up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="Login_page.php">Login</a>
            </li>
            <ul>
        </span>
      </div>
    </nav>

    <body bgcolor="white">
      <h1 style="border:10px solid crimson;padding:10px;color:deepskyblue;text-align:center;border-radius:10px;"><B>Sign-up</B></h1>
      <h2 style="color:coral;text-align:center;">Sign-up</h2>
      <p style="color:coral;text-align:center;">WE REQUEST YOU TO KINDLY FILL THIS FORM:</P>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div style="color:lightseagreen;text-align:center;">
          FIRST NAME:<input type="text" name="fname" placeholder="first name"><br><br>
          LAST NAME:<input type="text" name="lname" placeholder="last name"><br><br>
          DATE OF BIRTH:<input type="text" name="DOB" placeholder="DD/MM/YY"><br><br>
          EMAIL ID:<input type="email" name="email-id" placeholder="Email-id"><br><br>
          MOBILE NO:<input type="text" name="phone" placeholder="10 digit number"><br><br>
          GENDER:
          <input type="radio" name="gender" value="male">Male
          <input type="radio" name="gender" value="female">Female
          <input type="radio" name="gender" value="female">Other<br><br>
          UPLOAD PHOTO:
          <input type="FILE" name="photo"><br><br>
          ADDERSS:
          <textarea cols="25" rows="4" name="address" placeholder="Discription"></textarea><br><br>
          CITY:
          <INPUT TYPE="text" name="city"><br><br>
          PIN CODE:
          <INPUT TYPE="text" name="PINCODE"><br><br>
          state:<INPUT TYPE="text" name="state">
          <select>
            <option>delhi</option>
            <option>rajasthan</option>
            <option>jaipur</option>
            <option>utterpradesh</option>
          </select><br><br>

          Cource:<INPUT TYPE="text" name="Cource">
          <select>>
            <option>ACCP PRO</option>
            <option>MIS</option>
            <option>TALLY</option>
            <option>BASIC COMPUTER</option>
          </select><br><br>
          country
          <input type="text" name="country" value="india" readonly="readonly"><br><br>
        </div>
        <div class="but" style="text-align:center">
          <input style="border:2px solid black;border-radius:5px;font-size:large;" type="submit" name="submit">
          <input style="border:2px solid black;border-radius:5px;font-size:large;" type="reset" name="reset">
        </div>
        <br>
        <h1 style="color:chartreuse;border:5px solid blue;text-align:center;">Your Input</h1>
        <!-- <div class="button" style="float:right">
            <a href="submit.html"><button class="btn">submit</button></a>
            <a href="forms.html"><button class="btn">reset</button></a>
        </div> -->
      </form>
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
  echo "<br>";
  echo $_POST['gender'];
  echo "<br>";
  echo $_POST['photo'];
  echo "<br>";
  echo $_POST['address'];
  echo "<br>";
  echo $_POST['city'];
  echo "<br>";
  echo $_POST['PINCODE'];
  echo "<br>";
  echo $_POST['state'];
  echo "<br>";
  echo $_POST['Cource'];
  echo "<br>";
  echo $_POST['country'];
  echo "<br>";
}
?>