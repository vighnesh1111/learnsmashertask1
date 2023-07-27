<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health and fitness tracker</title>
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

    .login {
        /* background-color: pink; */
        float: right;
        width: 50%;
        text-align: center;
    }

    .main1 button {
        background-color: White;
        border-style: hidden;
        margin-top: 20px;
        width: 200px;
        height: 30px;
        border-radius: 50px;
        color: #45b1e8;
        font-size: 20px;
    }

    .main2 {
        padding-top: 20%;
        text-align: center;
        height: 46vh;
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
        <div class="login">
            <button
                onclick="window.location.href='https://localhost/health_and_fitness_tracker/login.php'">Log&nbsp;in</button>
        </div>
    </div>
    <div class="main2">
        <h1>
            Let's&nbsp;start&nbsp;fitness&nbsp;journey <br> together!
        </h1>
        <button
            onclick="window.location.href='https://localhost/health_and_fitness_tracker/information.php'">Start</button>
    </div>
</body>

</html>