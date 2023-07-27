<script>
    document.addEventListener('DOMContentLoaded', function () {
        const data = sessionStorage.getItem('data');
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

    // document.addEventListener('DOMContentLoaded', function () {
    //     const data = sessionStorage.getItem('user');
        
    //     document.cookie = "user=" + data;
    //     if (data) {
    //         console.log(data)
    //     }
    // });
</script>

<?php
    $server1 = "localhost";
    $username1 = "root";
    $password1 = "";

    $conn = mysqli_connect($server1, $username1, $password1);
    if (!$conn) {
        die("connection failed" . mysqli_connect_error());
    }

    $username = $_COOKIE["user"];
    // $goal = $_POST['goal'];

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

    $sql = "UPDATE `haft`.`haft` SET `aim`='$aim',`weight`='$weight',`height`='$height',
    `goal_weight`='$goal_weight',`goal_calories`='$goal_calories',`age`='$age' where `username` = '$username'";

    if ($conn->query($sql)) {
        // header("location:https://localhost/health_and_fitness_tracker/home.php");
    } else {
      echo "Error updating record: " . $conn->error;
    }


$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change</title>
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

    .main2 {
        text-align: center;
        padding-top: 20%;
    }

    .main2 button {
        font-size: larger;
        background-color: #45b1e8;
        border-style: hidden;
        width: 40%;
        height: 40px;
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
<form method="post" action="https://localhost/health_and_fitness_tracker/home.php">
    <button type="submit">change</button>
</div>
</form>
</body>
</html>