<?php
if (isset($_POST['username'])) {
    $server1 = "localhost";
    $username1 = "root";
    $password1 = "";

    $con = mysqli_connect($server1, $username1, $password1);

    if (!$con) {
        die("connection failed" . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from `haft`.`haft` where username = '$username' and password = '$password'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        header("location:https://localhost/health_and_fitness_tracker/home.php");
    } else {
        echo '<script> alert( "check username and password")</script>';
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    .main1 {
        background-color: #45b1e8;
        width: 100%;
        height: 80px;
        color: white;
    }

    .title {
        /* background-color: red; */
        float: left;
        width: 50%;
        font-size: xx-large;
        text-align: center;
    }

    .main {
        padding-top: 10%;
        text-align: center;
        height: 68vh;
    }

    input {
        text-align: center;
        width: 30%;
        height: 30px;
    }

    .main button {
        background-color: #45b1e8;
        border-style: hidden;
        /* margin-top: 50px; */
        width: 200px;
        height: 30px;
        border-radius: 50px;
        color: white;
        font-size: 20px;
    }
</style>

<body>
    <div class="main1">
        <div class="title">Health and <br> Fitness Tracker</li>
        </div>
    </div>
    <div class="main">
        <h1>Let's continue</h1> <br><br><br>
        <form  method="post" name="verify">
            <input type="text" name="username" id="username" placeholder="Enter your username"> <br><br>
            <input type="password" name="password" id="password" placeholder="Enter password"> <br><br><br><br>
            <button type="submit" onclick=funct()>Log&nbsp;in</button>
        </form>
    </div>
</body>
<script>
    function funct(){
    var username = document.forms["verify"]["username"].value
    sessionStorage.setItem("usernames", username)
    sessionStorage.setItem('user', username)
    }
</script>
</html>