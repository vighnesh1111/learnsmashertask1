<script>
    document.addEventListener('DOMContentLoaded', function () {
        const data = sessionStorage.getItem('data');
        console.log(data)
        document.cookie = "selected_item=" + data;
        if (data) {
            console.log(data)
        }
    });
    document.addEventListener('DOMContentLoaded', function () {
        const data = sessionStorage.getItem('data1');
        document.cookie = "selected_item1=" + data;
        if (data) {
            console.log(data)
        }
    });
    document.addEventListener('DOMContentLoaded', function () {
        const data = sessionStorage.getItem('data2');
        document.cookie = "selected_item2=" + data;
        if (data) {
            console.log(data)
        }
    });
    document.addEventListener('DOMContentLoaded', function () {
        const data = sessionStorage.getItem('data3');
        document.cookie = "selected_item3=" + data;
        if (data) {
            console.log(data)
        }
    });
    document.addEventListener('DOMContentLoaded', function () {
        const data = sessionStorage.getItem('imp');
        document.cookie = "selected_item4=" + data;
        if (data) {
            console.log(data)
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        const data = sessionStorage.getItem('op');
        document.cookie = "selected_item5=" + data;
        if (data) {
            console.log(data)
        }
    });
    // window.onload = function () {
    //     if (!window.location.hash) {
    //         window.location = window.location + '#loaded';
    //         window.location.reload();
    //     }
    // }
</script>
<?php
if (isset($_POST['username'])) {
    $server1 = "localhost";
    $username1 = "root";
    $password1 = "";

    $conn = mysqli_connect($server1, $username1, $password1);
    if (!$conn) {
        die("connection failed" . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $aim = $_COOKIE["selected_item"];
    $weight = $_COOKIE["selected_item1"];
    $height = $_COOKIE["selected_item2"];
    $age = $_COOKIE["selected_item3"];
    $goal_calories = $_COOKIE["selected_item4"];
    $goal_weight = $_COOKIE["selected_item5"];

    if ($aim == 1) {
        $aim = "weight loss";
    } else if ($aim == 2) {
        $aim = "weight gain";
    } else if ($aim = 3) {
        $aim = "weight maintain";
    } else {
    }

    $len = strlen($password);

    $duplicate = mysqli_query($conn, "select * from `haft`.`haft` where username='$username'");
    if (mysqli_num_rows($duplicate) > 0  and $len >=6) {

if(mysqli_num_rows($duplicate) > 0){
    echo '<script> alert("Username exists"); </script>';   
}else{
    echo '<script> alert("Password must be atleast 6 length"); </script>';
}

    } else
        if (
            $conn->query("INSERT INTO `haft`.`haft` (`username`, `password`, `fname`, `lname`,`aim`, `weight`,`height`,`goal_weight`, `goal_calories` ,`age`) 
        VALUES ('$username', '$password', '$fname', '$lname', '$aim', '$weight', '$height', '$goal_weight', '$goal_calories' ,'$age');") == true &&
            $password != "" &&  ($len != 6 || $len > 6)
        ) {
            header("location:https://localhost/health_and_fitness_tracker/home.php");
        }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    }

    .title {
        /* background-color: red; */
        float: left;
        width: 50%;
        font-size: xx-large;
        text-align: center;
        color: white;
    }

    .main2 {
        text-align: center;
        padding-top: 10%;
    }

    input {
        text-align: center;
        width: 25%;
        height: 30px;
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

<body>
    <div class="main1">
        <div class="title">Health and <br> Fitness Tracker</li>
        </div>
    </div>
    <div class="main2">
        <form method="post" action="https://localhost/health_and_fitness_tracker/signup.php" name="verify">
            <h1>Enter your details!</h1> <br><br>
            <input type="text" name="fname" id="fname" placeholder="Enter your first name">
            <input type="text" name="lname" id="lname" placeholder="Enter your last name"> <br><br>
            <input type="text" name="username" id="username" placeholder="username"> <br><br>
            <input type="password" name="password" id="password" placeholder="Enter password"> <br><br><br>
            <button type="submit" onclick="func()">Register</button>
        </form>
    </div>
</body>
<script>
    function func() {
        var username = document.forms["verify"]["username"].value
        var password = document.forms["verify"]["password"].value
        sessionStorage.setItem('username',username)
        var len = password.length

        if (username == "" && password == "") {
            alert("Enter username and password")
            window.location.reload()
        } else if (len < 6) {
            alert("password length must be atleast 6")
            window.location.reload()
        } else {
        }
sessionStorage.setItem('user', username)
    }
</script>

</html>