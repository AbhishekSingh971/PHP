<!doctype html>
<head>
  <title>login</title>
  <style>
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
      background-color: aquamarine;
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
      $nameErr = "Name is required";
    } else {
      $name = input_data($_POST["name"]);
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email = input_data($_POST["email"]);
      } else {
        $emailErr = "Email is not valid";
      }
    }

    if (empty($_POST["website"])) {
      $websiteErr = "";
    } else {
      $website = input_data($_POST["website"]);
    }

    if (empty($_POST["mobileno"])) {
      $mobilenoErr = "";
    } else {
      $mobileno = input_data($_POST["mobileno"]);
    }

    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
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

  <h1>Login</h1>
  <p><span class="error">* required field</span></p>
  <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
    <div class=form>
      Name: <input type="text" name="name">
      <span class="error">* <?php echo $nameErr; ?></span>
      <br><br>
      E-mail: <input type="text" name="email">
      <span class="error">* <?php echo $emailErr; ?></span>
      <br><br>
      Website: <input type="text" name="website">
      <span class="error"><?php echo $websiteErr; ?></span>
      <br><br>
      Phone no.: <input type="mobileno" name="mobileno">
      <span class="error"><?php echo $mobilenoErr; ?></span>
      <br><br>
      Gender:
      <input type="radio" name="gender" value="female">Female
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="other">Other
      <span class="error">* <?php echo $genderErr; ?></span>
      <br><br>
    </div>
    <div class="button">
      <button type="submit" name="submit">Login</button>
      <button type="reset" name="submit">Reset</button>
    </div>
  </form>

  <?php
  echo "<h2>Your Input:</h2>";
  echo $name;
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $website;
  echo "<br>";
  echo $mobileno;
  echo "<br>";
  echo $gender;
  ?>
</body>
</html>