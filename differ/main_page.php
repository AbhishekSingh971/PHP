<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>gadget</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    div.box{
      border:1px solid black;
      width:100px;
      border-radius: 50px;
      height:100px;
      animation-name:helloji;
      animation-duration: 6s;
      background-color: powderblue;
     position: relative;
     animation-iteration-count: infinite;
     animation-timing-function: linear;
     cursor: pointer;
     animation-delay: 2s;
    }
    @keyframes helloji {
      0%{background-color: white; left:0px; top:0px;}
      20%{background-color:lightcoral; left:100px; top:0px;}
      40%{background-color:teal; left:100px; top:100px;}
      60%{background-color:dodgerblue; left:-100px; top:100px;}
      80%{background-color: yellowgreen; left:-100px; top:0px;}
      100%{background-color:burlywood; left:0px; top:0px;}
    }
    </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-info ">
    <div class="container-fluid">
      <div class="nav-bar-header">
        <a class="navbar-brand" href="#">Gadget</a>
      </div>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-light bg-light" id="navbarText"> -->

      <ul class="nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="main_page">Home</a>
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
            <a class="nav-link" href="Login_page.php">Login</a>
          </li>
          <ul>
  </span>
  </div>
  </nav>
  <div class="box"align="center">Please Wait..<br>loding...</div>

</html>