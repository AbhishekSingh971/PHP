<?php
session_start();
?>
<!doctype html>

<head>
  <title>login</title>
  <style>
    * {
      box-sizing: border-box;
    }

    span.error {
      color: crimson;
    }

    div.form {
      text-transform: uppercase;
      display: block;
      border: 2px solid black;
      text-align: center;
      background-color: white;
      padding: 10px;
    }

    div.form input {
      margin: 10px;
    }

    div.button {
      padding: 8px;
      text-align: center;
      margin-top: 5px;
      background-color: black;
    }

    button {
      padding: 8px;
      background-color: azure;
      font-size: medium;
      border: 1px solid black;
      border-radius: 10px;
      margin-left: 20px;
      cursor: pointer;
    }

    h1 {
      border: 5px solid black;
      text-align: center;
    }
  </style>
</head>

<body bgcolor="Azure">
  <?php
  // define variables and set to empty values
  $nameErr = $emailErr = $genderErr = $mobilenoErr = $websiteErr =  "";
  $name = $email = $gender = $mobileno = $website = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "required";
    } else {
      $name = input_data($_POST["name"]);
    }

    if (empty($_POST["email"])) {
      $emailErr = "required";
    } else {
      $email = input_data($_POST["email"]);
    }

    // if (empty($_POST["website"])) {
    //   $websiteErr = "";
    // } else {
    //   $website = input_data($_POST["website"]);
    // }

    if (empty($_POST["mobileno"])) {
      $mobilenoErr = "";
    } else {
      $mobileno = input_data($_POST["mobileno"]);
    }

    if (empty($_POST["gender"])) {
      $genderErr = "required";
    } else {
      $gender = input_data($_POST["gender"]);
    }
  }

  function input_data($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>

  <h1>
    <marquee direction=right>Signup</marquee>
  </h1>
  <p><span class="error">* required field</span></p>
  <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
    <div class=form>
      <span>Name</span>
      <br>
      <input type="text" name="name">
      <span class="error">* <?php echo $nameErr; ?></span>
      <br>
      <span>E-mali</span>
      <br>
      <input type="text" name="email">
      <span class="error">* <?php echo $emailErr; ?></span>
      <br>
      <span>password</span>
      <br>
      <input type="password" name="password">
      <br>
      <!-- <span>Website</span>
      <br>
      <input type="text" name="website">
      <span class="error"><?php echo $websiteErr; ?></span>
      <br> -->
      <span>Mobile no.</span>
      <br>
      <input type="mobileno" name="mobileno">
      <span class="error"><?php echo $mobilenoErr; ?></span>
      <br>
      Gender:
      <input type="radio" name="gender" value="female">Female
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="other">Other
      <span class="error">* <?php echo $genderErr; ?></span>
      <br>
    </div>
    <div class="button">
      <button type="submit" name="submit">Signup</button>
      <button type="reset" name="reset">Reset</button>
    </div>
  </form>


  <!-- <?php
  if (isset($_POST['submit'])) {
    echo "<h2>Your Input:</h2>";
    $_session["Signup"] = "Signup succesful";
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];

    if (!isset($_SESSION["Signup"])) {
      // echo "<br>";
      // echo $_session['Signup'];
      echo "<br>";
      echo "Name : " . $_POST['name'];
      echo "<br>";
      echo "E-mail : " . $_POST['email'];
      // echo "<br>";
      // echo $website;
      echo "<br>";
      echo $mobileno;
      echo "<br>";
      echo "Gender : " . $_POST['gender'];
      echo "<br>";
      // echo "<a href='http://localhost/website/gadget.php'><button type='button' name='confirm'>Confirm</button></a>";
    }
  }
  ?> -->


  <?php
  if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "abhi";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $webpassword = $_POST['password'];
    $mobileno = $_POST['mobileno'];
    $gender = $_POST['gender'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } else {
      echo "<h3 style='color:Green;text-align:center;'><b>Connected</h3></b>" . "<br>";
    }

    //This is for duplicate emailid
  $sqld = "SELECT Email, Password FROM `student` WHERE Email = '$email'";
  $result = $conn->query($sqld);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($row["Email"] == $email) {
        // header('location: http://localhost/website/gadget.php');
        echo "<h3 style='color:red;text-align:center;'><b>You have already an account with this email</b></h3>";
        die();
      }
    }
  }

    //This is for new emailid
    $sql = "INSERT INTO student (Name, Email, Password , Mobileno, Gender)
VALUES ('$name','$email','$webpassword','$mobileno','$gender')";

    if ($conn->query($sql) === TRUE) {
      // echo "New record created successfully";
      header('location: http://localhost/website/gadget.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
  ?>

</body>

</html>