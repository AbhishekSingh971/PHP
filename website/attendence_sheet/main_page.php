<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendence sheet
    </title>
</head>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: darkcyan;
    }

    h1.firsth1 {
        text-align: center;
        color: oldlace;
        /* display:; */
        border-bottom: 4px solid rgb(7, 241, 97);
    }

    table {
        user-select: none;
        text-align: center;
        width: 75%;
        border-right: 2px solid black;
        border-left: 2px solid black;
    }

    td,
    th {
        border-bottom: 2px solid black;
        border-collapse: collapse;
        padding: 15px;
        margin-top: 5px;
    }

    tr:hover:not(tr.firsttr) {
        background-color: azure;
    }

    tr:nth-child(even) {
        background-color: gray;
    }

    div.button {
        padding: 8px;
        text-align: center;
        margin-top: 20px;
        background-color: black;
    }

    div.button input {
        cursor: pointer;
        padding: 8px;
        background-color: azure;
        font-size: medium;
        border: 1px solid black;
        border-radius: 10px;
        margin-left: 20px;
    }

    .nav {
        overflow: hidden;
        background-color: #333;
    }

    .nav div a {
        float: right;
        display: block;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        color: #f2f2f2;
    }

    .nav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    /* div.bca {
        display:none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1; 
    }
    a.bca{
        position:static;
        display:inline-block;
    }
    .nav a.bca:hover .bca_nav{
        display:contents;
    } */

    .nav a:hover {
        background-color: #ddd;
        color: black;
    }

    .nav div a:hover {
        background-color: #ddd;
        color: black;
    }

    .button input:hover {
        background-color: blanchedalmond;
        color: #333;
    }
</style>

<body>
    <h1 class="firsth1">Attendence Sheet</h1>
    <br>
    <div class="nav">
        <a class="bca" href="#">BCA</a>
        <a href="#">BBA</a>
        <a href="#">BJMC</a>
        <div class="nav1">
            <?php
            if (count($_SESSION) > 0) {
                echo "<a href='2_logout_page.php'>Logout</a>";
            } else {
                echo "<a href='1_login_page.php'>Login</a>";
            }
            ?>
            <a href='#'>
                <?php
                session_destroy();
                if (count($_SESSION) > 0) {
                    echo $_SESSION['email'];
                } else {
                    echo "Signup";
                }
                ?>
            </a>
        </div>
    </div>
    <!-- <div class="bca_nav">
        <a href="#">Morning shift</a>
        <a href="#">Evening shift</a>
    </div> -->
    <br>
    <table>
        <tr class="firsttr">
            <td>Sno.</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Enrollment number</td>
            <td>Attendence</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Abhishek</td>
            <td>singh</td>
            <td>04521302021</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Ansh</td>
            <td>singh</td>
            <td>03821302021</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Aman</td>
            <td>jha</td>
            <td>04721302021</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Rohan </td>
            <td>Jidal</td>
            <td>04821302021</td>
            <td><input type="checkbox"></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Orav</td>
            <td>Goyal</td>
            <td>01721302021</td>
            <td><input type="checkbox"></td>
        </tr>
    </table>
    <div class="button">
        <a href="#"><input type="submit" name="submit"></a>
        <a href="main_page.php"><input type="reset" name="reset"></a>
    </div>
</body>

</html>