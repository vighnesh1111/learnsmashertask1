<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        .main2{
            text-align: center;
            font-size: xx-large;
        }
        .main2 button {
            background-color: #45b1e8;
            border-style: hidden;
            margin-top: 50px;
            width: 200px;
            height: 30px;
            border-radius: 50px;
            color: white;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="main1">
        <div class="title">Health and <br> Fitness Tracker</li>
        </div>
    </div>
    <div class="main2">
        <br><br><br>
        Name: 
        <?php
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);

        if (!$con) {
            die("connection failed" . mysqli_connect_error());
        }

        $user = $_COOKIE["user"];

        $query = "select fname, lname from `haft`.`haft` where username = '$user'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["fname"];
                echo "&nbsp;";
                echo $row["lname"];
            }
        }
        $con->close();
        ?>
<br> <br>
Username: 
        <?php
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);

        if (!$con) {
            die("connection failed" . mysqli_connect_error());
        }

        $user = $_COOKIE["user"];

        $query = "select username from `haft`.`haft` where username = '$user'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["username"];
            }
        }
        $con->close();
        ?>
        <br> <br>
        your aim is 
        <?php
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);

        if (!$con) {
            die("connection failed" . mysqli_connect_error());
        }

        $user = $_COOKIE["user"];

        $query = "select aim from `haft`.`haft` where username = '$user'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["aim"];
            }
        }
        $con->close();
        ?>
        <br>
        Weight:
        <?php
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);

        if (!$con) {
            die("connection failed" . mysqli_connect_error());
        }

        $user = $_COOKIE["user"];

        $query = "select weight from `haft`.`haft` where username = '$user'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["weight"];
            }
        }
        $con->close();
        ?>
        Kg
        <br>
        Height:
        <?php
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);

        if (!$con) {
            die("connection failed" . mysqli_connect_error());
        }

        $user = $_COOKIE["user"];

        $query = "select height from `haft`.`haft` where username = '$user'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["height"];
            }
        }
        $con->close();
        ?>
        cm
        <br>
   Age: 
        <?php
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);

        if (!$con) {
            die("connection failed" . mysqli_connect_error());
        }

        $user = $_COOKIE["user"];

        $query = "select age from `haft`.`haft` where username = '$user'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["age"];
            }
        }
        $con->close();
        ?>
        <br> <br>
        Weight Goal:
        <?php
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);

        if (!$con) {
            die("connection failed" . mysqli_connect_error());
        }

        $user = $_COOKIE["user"];

        $query = "select goal_weight from `haft`.`haft` where username = '$user'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["goal_weight"];
            }
        }
        $con->close();
        ?>
        Kg <br><br>
        <button type="submit" onclick="location.href='https://localhost/health_and_fitness_tracker/index.php'">Log out</button>
    </div>
</body>

</html>